<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PokemonController;

Route::get('products', [PokemonController::class, 'index']);
Route::get('products/create', [PokemonController::class, 'create']);
Route::post('products', [PokemonController::class, 'store']);
Route::get('products/{id}/edit', [PokemonController::class, 'edit']);
Route::put('products/{id}', [PokemonController::class, 'update']);
Route::delete('products/{id}', [PokemonController::class, 'destroy']);

