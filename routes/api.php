<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\UsuarioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DragonController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('dragons', DragonController::class);
