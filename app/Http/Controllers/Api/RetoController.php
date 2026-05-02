<?php

namespace App\Http\Controllers\Api;

use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Entities\Esquema;
use App\Domain\Ports\NormalizacionServiceInterface;
use App\Http\Controllers\Controller;
use App\Models\ParticipacionReto;
use App\Models\RetoSemanal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RetoController extends Controller
{
    public function __construct(
        private NormalizacionServiceInterface $normalizacionService
    ) {}

    public function index()
    {
        $retos = RetoSemanal::where('fecha_inicio', '<=', Carbon::now())
            ->where('fecha_fin', '>=', Carbon::now())
            ->get();

        return response()->json($retos);
    }

    public function activo(Request $request)
    {
        $reto = RetoSemanal::where('fecha_inicio', '<=', Carbon::now())
            ->where('fecha_fin', '>=', Carbon::now())
            ->first();

        if ($reto && $request->user()) {
            $reto->participado = $reto->participaciones()->where('user_id', $request->user()->id)->exists();
        }

        return response()->json($reto);
    }

    public function participar(Request $request, RetoSemanal $reto)
    {
        $validated = $request->validate([
            'solucion' => 'required|array',
            'solucion.atributos' => 'required|array',
            'solucion.dependencias' => 'required|array',
            'tiempo_segundos' => 'required|integer|min:1',
        ]);

        $dependencias = array_map(function ($d) {
            return new DependenciaFuncional($d['determinante'], $d['dependiente']);
        }, $validated['solucion']['dependencias']);

        $esquemaUsuario = new Esquema($validated['solucion']['atributos'], $dependencias);
        $resultado = $this->normalizacionService->validar($esquemaUsuario);

        $puntaje = $this->calcularPuntaje($resultado, $validated['tiempo_segundos']);

        $participacion = ParticipacionReto::create([
            'user_id' => $request->user()->id,
            'reto_id' => $reto->id,
            'puntaje' => $puntaje,
            'completado' => true,
        ]);

        return response()->json([
            'puntaje' => $puntaje,
            'nivel_alcanzado' => $resultado->getNivel(),
        ]);
    }

    public function ranking(RetoSemanal $reto)
    {
        $ranking = $reto->participaciones()
            ->with('user:id,name')
            ->orderBy('puntaje', 'desc')
            ->limit(10)
            ->get(['id', 'user_id', 'puntaje', 'created_at']);

        return response()->json($ranking);
    }

    private function calcularPuntaje($resultado, int $tiempo): int
    {
        $base = match($resultado->getNivel()) {
            'BCNF' => 100,
            '3FN' => 80,
            '2FN' => 50,
            default => 20,
        };

        $bonus = max(0, 60 - intval($tiempo / 10));
        return $base + $bonus;
    }
}