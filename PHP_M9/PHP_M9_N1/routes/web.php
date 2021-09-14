<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pagina1Controller;
use App\Http\Controllers\Pagina2Controller;
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

//************Pàgina inici, directe i amb controlador

//Route::get('/', function () {
//    return "Bones";
////    return view('welcome');
//});

Route::get('/', HomeController::class);

//****************Pàgina "pàgina1" directe i amb controlador

//Route::get('pagina1', function () {
//    return "Pàgina 1";
////    return view('welcome');
//});
//
//Route::get('pagina1/create', function () {
//    return "Formulari inserció dades";
////    return view('welcome');
//});
//
//Route::get('pagina1/{apartat}', function ($apartat) {
//    return "Pàgina 1: $apartat";
////    return view('welcome');
//});
//
//Route::get('pagina1/{apartat}/{subapartat}', function ($apartat, $subapartat) {
//    return "Pàgina 1: $apartat, $subapartat";
////    return view('welcome');
//});

Route::get('pagina1', [Pagina1Controller::class, 'index']);

Route::get('pagina1/create', [Pagina1Controller::class, 'create']);

Route::get('pagina1/{nom}', [Pagina1Controller::class, 'show']);

Route::get('pagina2', Pagina2Controller::class);