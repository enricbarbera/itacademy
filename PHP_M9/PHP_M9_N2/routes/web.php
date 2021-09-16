<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\DepartamentoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('paises');
});

Route::get('paises', [PaisController::class, 'index']);
Route::post('paises', [PaisController::class, 'store']);
Route::get('paises/{x}', [PaisController::class, 'show']);
Route::put('paises/{x}', [PaisController::class, 'update']);
Route::delete('paises/{x}', [PaisController::class, 'destroy']);
Route::get('paises/{x}/departamentos', [DepartamentoController::class, 'index']);
Route::post('paises/{x}/departamentos', [DepartamentoController::class, 'store']);
Route::get('paises/{x}/departamentos/{y}', [DepartamentoController::class, 'show']);
Route::put('paises/{x}/departamentos/{y}', [DepartamentoController::class, 'update']);
Route::delete('paises/{x}/departamentos/{y}', [DepartamentoController::class, 'destroy']);