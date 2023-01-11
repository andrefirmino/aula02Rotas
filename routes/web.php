<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\CalculadoraController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'principal']);

Route::get('/contato', [HomeController::class, 'contato']);

Route::get('/sobre', [HomeController::class, 'sobre']);

Route::get('/pokemon/{nome}', [PokemonController::class, 'pokemon']);

Route::get('/calculadora', [CalculadoraController::class, 'calculadora']);

Route::get('/calcular/{num1}/{num2}/{operador}', [CalculadoraController::class, 'calcular']);
