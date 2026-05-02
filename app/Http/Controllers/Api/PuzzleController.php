<?php

namespace App\Http\Controllers\Api;

use App\Domain\Entities\DependenciaFuncional;
use App\Domain\Entities\Esquema;
use App\Domain\Ports\NormalizacionServiceInterface;
use App\Http\Controllers\Controller;
use App\Models\IntentoPuzzle;
use App\Models\Puzzle;
use Illuminate\Http\Request;

class PuzzleController extends Controller
{
    public function __construct(
        private NormalizacionServiceInterface $normalizacionService
    ) {}

    public function index(Request $request)
    {
        $puzzles = Puzzle::where('activo', true)->get();

        if ($request->user()) {
            $puzzles->each(function ($puzzle) use ($request) {
                $puzzle->resuelto = $puzzle->intentos()->where('user_id', $request->user()->id)->where('es_correcto', true)->exists();
            });
        }

        return response()->json($puzzles);
    }

    public function resolver(Request $request, Puzzle $puzzle)
    {
        $validated = $request->validate([
            'solucion' => 'required|array',
            'solucion.atributos' => 'required|array',
            'solucion.dependencias' => 'required|array',
        ]);

        $dependencias = array_map(function ($d) {
            return new DependenciaFuncional($d['determinante'], $d['dependiente']);
        }, $validated['solucion']['dependencias']);

        $esquemaUsuario = new Esquema($validated['solucion']['atributos'], $dependencias);
        $resultado = $this->normalizacionService->validar($esquemaUsuario);

        $solucionEsperada = $puzzle->solucion_esperada;
        $esCorrecto = $this->compararSoluciones($resultado, $solucionEsperada);

        $intento = IntentoPuzzle::create([
            'user_id' => $request->user()->id,
            'puzzle_id' => $puzzle->id,
            'respuesta_json' => $validated['solucion'],
            'es_correcto' => $esCorrecto,
            'puntaje' => $esCorrecto ? $puzzle->puntaje_maximo : 0,
        ]);

        return response()->json([
            'es_correcto' => $esCorrecto,
            'puntaje' => $intento->puntaje,
            'nivel_alcanzado' => $resultado->getNivel(),
        ]);
    }

    public function intento(Request $request, Puzzle $puzzle)
    {
        $intento = $puzzle->intentos()
            ->where('user_id', $request->user()->id)
            ->latest()
            ->first();

        return response()->json($intento);
    }

    private function compararSoluciones($resultado, $solucionEsperada): bool
    {
        return $resultado->getNivel() === $solucionEsperada['nivel'];
    }
}