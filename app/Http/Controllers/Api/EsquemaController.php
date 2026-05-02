<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Esquema;
use Illuminate\Http\Request;

class EsquemaController extends Controller
{
    public function index(Request $request)
    {
        $esquemas = $request->user()->esquemas()->with('validaciones')->get();
        return response()->json($esquemas);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'atributos_json' => 'required|array',
            'dependencias_json' => 'required|array',
        ]);

        $esquema = $request->user()->esquemas()->create($validated);
        return response()->json($esquema, 201);
    }

    public function show(Request $request, Esquema $esquema)
    {
        if ($esquema->user_id !== $request->user()->id) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        return response()->json($esquema->load('validaciones'));
    }

    public function destroy(Request $request, Esquema $esquema)
    {
        if ($esquema->user_id !== $request->user()->id) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        $esquema->delete();
        return response()->json(['message' => 'Esquema eliminado']);
    }
}