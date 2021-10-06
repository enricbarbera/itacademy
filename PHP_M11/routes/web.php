<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
    // return view('welcome');
    return view('home');
});

Route::get('login', [EmployeeController::class, 'login']);

Route::post('index', [EmployeeController::class, 'index'])->name('llistatInici');

Route::get('create', [EmployeeController::class, 'create'])->name('nouRegistre');

Route::post('createOk', [EmployeeController::class, 'createOk'])->name('registreOk');

Route::get('edit/{employee}', [EmployeeController::class, 'edit'])->name('editarRegistre');

Route::put('editOk/{employee}', [EmployeeController::class, 'editOk'])->name('edicioOk');

Route::get('show/{id}', [EmployeeController::class, 'show'])->name('visualitzarRegistre');

// Route::get('showOk', [EmployeeController::class, 'showOk']);

Route::get('delete/{employee}', [EmployeeController::class, 'delete'])->name('eliminarRegistre');

Route::get('deleteOk/{employee}', [EmployeeController::class, 'deleteOk'])->name('eliminacioOk');
