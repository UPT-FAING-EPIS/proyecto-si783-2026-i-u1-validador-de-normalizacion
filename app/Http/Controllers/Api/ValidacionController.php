<?php

namespace App\Http\Controllers\Api;

use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Entities\Esquema;
use App\Domain\Ports\NormalizacionServiceInterface;
use App\Http\Controllers\Controller;
use App\Models\Esquema as EsquemaModel;
use App\Models\Validacion;
use Illuminate\Http\Request;

class ValidacionController extends Controller
{
    public function __construct(
        private NormalizacionServiceInterface $normalizacionService
    ) {}

    public function validar(Request $request)
    {
        $validated = $request->validate([
            'atributos' => 'required|array|max:30',
            'atributos.*' => 'string|max:50',
            'dependencias' => 'required|array',
            'dependencias.*.determinante' => 'required|string',
            'dependencias.*.dependiente' => 'required|string',
        ]);

        $dependencias = array_map(function ($d) {
            return new DependenciaFuncional($d['determinante'], $d['dependiente']);
        }, $validated['dependencias']);

        $esquema = new Esquema($validated['atributos'], $dependencias);
        $resultado = $this->normalizacionService->validar($esquema);

        $esquemaId = null;
        if ($request->user()) {
            $esquemaModel = EsquemaModel::create([
                'user_id' => $request->user()->id,
                'nombre' => 'Esquema validado',
                'descripcion' => 'Validación automática',
                'atributos_json' => $validated['atributos'],
                'dependencias_json' => $validated['dependencias'],
            ]);

            Validacion::create([
                'esquema_id' => $esquemaModel->id,
                'nivel' => $resultado->getNivel(),
                'violaciones_json' => $resultado->getViolaciones(),
            ]);

            $esquemaId = $esquemaModel->id;
        }

        return response()->json([
            'nivel' => $resultado->getNivel(),
            'violaciones' => $resultado->getViolaciones(),
            'esquema_id' => $esquemaId,
        ]);
    }
}