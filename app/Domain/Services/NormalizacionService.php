<?php

namespace App\Domain\Services;

use App\Domain\Entities\Esquema;
use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Entities\ResultadoValidacion;
use App\Domain\Ports\NormalizacionServiceInterface;

class NormalizacionService implements NormalizacionServiceInterface
{
    public function validar(Esquema $esquema): ResultadoValidacion
    {
        $violaciones = [];
        $atributos = $esquema->getAtributos();
        $dependencias = $esquema->getDependencias();

        $claves = $this->obtenerClavesCandidatas($esquema);
        if (empty($claves)) {
            $violaciones[] = 'No se encontró ninguna clave candidata. Verifique las dependencias.';
            return new ResultadoValidacion('NO', $violaciones);
        }

        $nivel = '1FN';

        if ($this->verificar2FN($esquema, $claves)) {
            $nivel = '2FN';
        } else {
            $violaciones[] = 'Violación de 2FN: existe dependencia funcional parcial de un atributo no primo respecto a una parte de una clave candidata.';
            return new ResultadoValidacion($nivel, $violaciones);
        }

        if ($this->verificar3FN($esquema, $claves)) {
            $nivel = '3FN';
        } else {
            $violaciones[] = 'Violación de 3FN: existe dependencia funcional transitiva de un atributo no primo.';
            return new ResultadoValidacion($nivel, $violaciones);
        }

        if ($this->verificarBCNF($esquema, $claves)) {
            $nivel = 'BCNF';
        } else {
            $violaciones[] = 'Violación de BCNF: una dependencia funcional tiene un determinante que no es superclave.';
            return new ResultadoValidacion($nivel, $violaciones);
        }

        return new ResultadoValidacion($nivel, $violaciones);
    }

    private function calcularCierre(array $inicial, array $dependencias): array
    {
        $closure = $inicial;
        $changed = true;
        while ($changed) {
            $changed = false;
            foreach ($dependencias as $df) {
                $det = $df->getDeterminante();
                $deps = $df->getDependiente();
                $detAttrs = array_map('trim', explode(',', $det));
                $depAttrs = array_map('trim', explode(',', $deps));
                if (count(array_diff($detAttrs, $closure)) == 0) {
                    foreach ($depAttrs as $attr) {
                        if (!in_array($attr, $closure)) {
                            $closure[] = $attr;
                            $changed = true;
                        }
                    }
                }
            }
        }
        return $closure;
    }

    private function obtenerClavesCandidatas(Esquema $esquema): array
    {
        $atributos = $esquema->getAtributos();
        $dependencias = $esquema->getDependencias();
        $total = count($atributos);

        $subconjuntos = $this->generarSubconjuntos($atributos);
        $candidatas = [];

        foreach ($subconjuntos as $sub) {
            $cierre = $this->calcularCierre($sub, $dependencias);
            if (count($cierre) === $total) {
                $candidatas[] = $sub;
            }
        }

        $minimales = [];
        foreach ($candidatas as $c) {
            $esMinimal = true;
            foreach ($candidatas as $c2) {
                if ($c !== $c2 && count(array_diff($c2, $c)) === 0 && count($c2) < count($c)) {
                    $esMinimal = false;
                    break;
                }
            }
            if ($esMinimal) {
                $minimales[] = $c;
            }
        }

        return $minimales;
    }

    private function generarSubconjuntos(array $atributos): array
    {
        $subsets = [[]];
        foreach ($atributos as $attr) {
            $currentLength = count($subsets);
            for ($i = 0; $i < $currentLength; $i++) {
                $newSubset = array_merge($subsets[$i], [$attr]);
                $subsets[] = $newSubset;
            }
        }
        array_shift($subsets);
        return $subsets;
    }

    private function getAtributosNoPrimos(Esquema $esquema, array $claves): array
    {
        $atributos = $esquema->getAtributos();
        $noPrimos = [];
        
        foreach ($atributos as $attr) {
            $esPrimo = false;
            foreach ($claves as $clave) {
                if (in_array($attr, $clave)) {
                    $esPrimo = true;
                    break;
                }
            }
            if (!$esPrimo) {
                $noPrimos[] = $attr;
            }
        }
        
        return $noPrimos;
    }

    private function verificar2FN(Esquema $esquema, array $clavesCandidatas): bool
    {
        $dependencias = $esquema->getDependencias();
        $noPrimos = $this->getAtributosNoPrimos($esquema, $clavesCandidatas);

        foreach ($dependencias as $df) {
            $determinante = $df->getDeterminante();
            $dependiente = $df->getDependiente();

            $detAttrs = array_map('trim', explode(',', $determinante));
            $depAttrs = array_map('trim', explode(',', $dependiente));

            foreach ($depAttrs as $depAttr) {
                if (in_array($depAttr, $noPrimos)) {
                    $esSubconjuntoDeClave = false;
                    foreach ($clavesCandidatas as $clave) {
                        if (count(array_diff($detAttrs, $clave)) === 0 && count($detAttrs) < count($clave)) {
                            $esSubconjuntoDeClave = true;
                            break;
                        }
                    }

                    if ($esSubconjuntoDeClave) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    private function verificar3FN(Esquema $esquema, array $clavesCandidatas): bool
    {
        $dependencias = $esquema->getDependencias();
        $noPrimos = $this->getAtributosNoPrimos($esquema, $clavesCandidatas);

        foreach ($dependencias as $df) {
            $determinante = $df->getDeterminante();
            $dependiente = $df->getDependiente();

            $detAttrs = array_map('trim', explode(',', $determinante));
            $depAttrs = array_map('trim', explode(',', $dependiente));

            foreach ($depAttrs as $depAttr) {
                if (in_array($depAttr, $noPrimos)) {
                    $detNoEsSuperclave = true;
                    $detEsNoPrimo = false;

                    foreach ($clavesCandidatas as $clave) {
                        if (count(array_diff($detAttrs, $clave)) === 0) {
                            $detNoEsSuperclave = false;
                            break;
                        }
                    }

                    foreach ($noPrimos as $noPrimo) {
                        if (in_array($noPrimo, $detAttrs)) {
                            $detEsNoPrimo = true;
                            break;
                        }
                    }

                    if ($detEsNoPrimo && $detNoEsSuperclave) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    private function verificarBCNF(Esquema $esquema, array $clavesCandidatas): bool
    {
        $dependencias = $esquema->getDependencias();

        foreach ($dependencias as $df) {
            $determinante = $df->getDeterminante();
            $detAttrs = array_map('trim', explode(',', $determinante));

            $esSuperclave = false;
            foreach ($clavesCandidatas as $clave) {
                $cierre = $this->calcularCierre($detAttrs, $dependencias);
                $total = count($esquema->getAtributos());
                if (count($cierre) === $total) {
                    $esSuperclave = true;
                    break;
                }
            }

            if (!$esSuperclave) {
                return false;
            }
        }

        return true;
    }
}