<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return response()->json([
            'status' => true,
            'usuarios' => $usuarios
        ], 200);
    }

    public function store(StoreUsuarioRequest $request)
    {
        $data = $request->all();
        // Hashear la contraseña antes de guardar
        //$data['contrasena'] = Hash::make($data['contrasena']);

        $usuario = Usuario::create($data);

        return response()->json([
            'status' => true,
            'message' => "Usuario creado con éxito!",
            'usuario' => $usuario
        ], 200);
    }

    // Opcionalmente, podrías agregar show, update, destroy, etc.
}
