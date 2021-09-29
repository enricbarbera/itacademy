<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login',  [AuthController::class, 'index']);

Route::post('/login', [AuthController::class, 'store']);

Route::post('/logout', function () {
    return 'Logout usuari';
});

Route::get('catalog', [CatalogController::class, 'index']);

Route::get('catalog/show/{id}', [CatalogController::class, 'show']);

Route::get('catalog/create', [CatalogController::class, 'create']);

Route::post('catalog', [CatalogController::class, 'store']);

Route::get('catalog/edit/{id}', [CatalogController::class, 'edit']);

Route::post('catalog/edit', [CatalogController::class, 'update']);
