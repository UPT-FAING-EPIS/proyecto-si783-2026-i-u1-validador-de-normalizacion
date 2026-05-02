<?php

require_once __DIR__ . '/app/Domain/Entities/DependenciaFuncional.php';
require_once __DIR__ . '/app/Domain/Entities/Esquema.php';
require_once __DIR__ . '/app/Domain/Entities/ResultadoValidacion.php';
require_once __DIR__ . '/app/Domain/Ports/NormalizacionServiceInterface.php';
require_once __DIR__ . '/app/Domain/Services/NormalizacionService.php';

use App\Domain\Entities\Esquema;
use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Services\NormalizacionService;

$service = new NormalizacionService();

echo "<!DOCTYPE html><html><head><title>Prueba Normalización</title>";
echo "<style>body{font-family:Arial;margin:40px;} pre{background:#f4f4f4;padding:15px;border-radius:5px;}</style>";
echo "</head><body>";
echo "<h1>Motor de Normalización - Resultados de Prueba</h1>";

echo "<h2>Caso 1: Esquema BCNF (clave simple)</h2>";
echo "<pre>";
$atributos1 = ['A', 'B', 'C'];
$deps1 = [
    new DependenciaFuncional('A', 'B'),
    new DependenciaFuncional('A', 'C'),
];
$esquema1 = new Esquema($atributos1, $deps1);
$resultado1 = $service->validar($esquema1);
echo "Atributos: " . implode(', ', $atributos1) . "\n";
echo "Dependencias: A→B, A→C\n";
echo "Nivel: " . $resultado1->getNivel() . "\n";
echo "Violaciones: " . (empty($resultado1->getViolaciones()) ? 'Ninguna' : implode(', ', $resultado1->getViolaciones()));
echo "</pre>";

echo "<h2>Caso 2: Esquema 3FN (dependencia transitiva)</h2>";
echo "<pre>";
$atributos2 = ['A', 'B', 'C'];
$deps2 = [
    new DependenciaFuncional('A', 'B'),
    new DependenciaFuncional('B', 'C'),
];
$esquema2 = new Esquema($atributos2, $deps2);
$resultado2 = $service->validar($esquema2);
echo "Atributos: " . implode(', ', $atributos2) . "\n";
echo "Dependencias: A→B, B→C\n";
echo "Nivel: " . $resultado2->getNivel() . "\n";
echo "Violaciones: " . (empty($resultado2->getViolaciones()) ? 'Ninguna' : implode(', ', $resultado2->getViolaciones()));
echo "</pre>";

echo "<h2>Caso 3: Esquema 2FN (dependencia parcial)</h2>";
echo "<pre>";
$atributos3 = ['A', 'B', 'C', 'D'];
$deps3 = [
    new DependenciaFuncional('A', 'C'),
    new DependenciaFuncional('B', 'D'),
    new DependenciaFuncional('A,B', 'C'),
    new DependenciaFuncional('A,B', 'D'),
];
$esquema3 = new Esquema($atributos3, $deps3);
$resultado3 = $service->validar($esquema3);
echo "Atributos: " . implode(', ', $atributos3) . "\n";
echo "Dependencias: A→C, B→D, AB→C, AB→D\n";
echo "Nivel: " . $resultado3->getNivel() . "\n";
echo "Violaciones: " . (empty($resultado3->getViolaciones()) ? 'Ninguna' : implode(', ', $resultado3->getViolaciones()));
echo "</pre>";

echo "</body></html>";