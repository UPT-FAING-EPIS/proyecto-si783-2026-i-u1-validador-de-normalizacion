<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LogSistema;
use App\Models\Puzzle;
use App\Models\RetoSemanal;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function puzzles(Request $request)
    {
        $puzzles = Puzzle::paginate(20);
        return response()->json($puzzles);
    }

    public function storePuzzle(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'dificultad' => 'required|integer|min:1|max:5',
            'solucion_esperada' => 'required|array',
            'activo' => 'boolean',
        ]);

        $puzzle = Puzzle::create($validated);
        return response()->json($puzzle, 201);
    }

    public function updatePuzzle(Request $request, Puzzle $puzzle)
    {
        $validated = $request->validate([
            'titulo' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|string',
            'dificultad' => 'sometimes|integer|min:1|max:5',
            'solucion_esperada' => 'sometimes|array',
            'activo' => 'sometimes|boolean',
        ]);

        $puzzle->update($validated);
        return response()->json($puzzle);
    }

    public function destroyPuzzle(Puzzle $puzzle)
    {
        $puzzle->delete();
        return response()->json(['message' => 'Puzzle eliminado']);
    }

    public function retos(Request $request)
    {
        $retos = RetoSemanal::paginate(20);
        return response()->json($retos);
    }

    public function storeReto(Request $request)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after:fecha_inicio',
        ]);

        $reto = RetoSemanal::create($validated);
        return response()->json($reto, 201);
    }

    public function updateReto(Request $request, RetoSemanal $reto)
    {
        $validated = $request->validate([
            'titulo' => 'sometimes|string|max:255',
            'descripcion' => 'sometimes|string',
            'fecha_inicio' => 'sometimes|date',
            'fecha_fin' => 'sometimes|date|after:fecha_inicio',
        ]);

        $reto->update($validated);
        return response()->json($reto);
    }

    public function destroyReto(RetoSemanal $reto)
    {
        $reto->delete();
        return response()->json(['message' => 'Reto eliminado']);
    }

    public function disable(User $user)
    {
        if ($user->role === 'administrador') {
            return response()->json(['message' => 'No se puede deshabilitar un administrador'], 403);
        }

        $user->update(['activo' => false]);
        return response()->json(['message' => 'Usuario deshabilitado']);
    }

    public function enable(User $user)
    {
        $user->update(['activo' => true]);
        return response()->json(['message' => 'Usuario habilitado']);
    }

    public function history(User $user)
    {
        $history = [
            'esquemas' => $user->esquemas()->count(),
            'validaciones' => $user->esquemas()->withCount('validaciones')->get()->sum('validaciones_count'),
            'puzzles_resueltos' => $user->intentosPuzzle()->where('es_correcto', true)->count(),
            'retos_participados' => $user->participacionesReto()->count(),
        ];

        return response()->json($history);
    }

    public function logs(Request $request)
    {
        $logs = LogSistema::with('user:id,name,email')
            ->orderBy('created_at', 'desc')
            ->paginate(50);

        return response()->json($logs);
    }
}