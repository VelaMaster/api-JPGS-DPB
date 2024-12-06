<?php

namespace App\Http\Controllers;

use App\Models\Dragon;
use Illuminate\Http\Request;

class DragonController extends Controller
{
    public function index()
    {
        return response()->json(Dragon::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'rareza' => 'required|string|max:255',
            'elemento' => 'required|string|max:255',
            'imagen' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $dragon = Dragon::create($validated);

        return response()->json([
            'message' => 'Dragon creado con éxito.',
            'dragon' => $dragon
        ], 201);
    }

    public function show($id)
    {
        $dragon = Dragon::find($id);

        if (!$dragon) {
            return response()->json(['message' => 'Dragón no encontrado'], 404);
        }

        return response()->json($dragon, 200);
    }

    public function update(Request $request, $id)
    {
        $dragon = Dragon::find($id);

        if (!$dragon) {
            return response()->json(['message' => 'Dragón no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'rareza' => 'required|string|max:255',
            'elemento' => 'required|string|max:255',
            'imagen' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        $dragon->update($validated);

        return response()->json([
            'message' => 'Dragón actualizado con éxito.',
            'dragon' => $dragon
        ], 200);
    }

    public function destroy($id)
    {
        $dragon = Dragon::find($id);

        if (!$dragon) {
            return response()->json(['message' => 'Dragón no encontrado'], 404);
        }

        $dragon->delete();

        return response()->json(['message' => 'Dragón eliminado con éxito.'], 200);
    }
}
