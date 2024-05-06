<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Rotas para operações de usuário
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');             // Listar todos os usuários
    Route::post('/users', 'store');            // Criar um novo usuário
    Route::get('/users/{id}', 'show');         // Mostrar detalhes de um usuário
    Route::put('/users/{id}', 'update');       // Atualizar um usuário
    Route::delete('/users/{id}', 'destroy');   // Excluir um usuário
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
