<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\PlayerController;

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

Route::get('/dashboard', function () {
    return view('/index');
})->middleware(['auth'])->name('dashboard');

Route::get('/index', function () {
    return view('/index');
})->middleware(['auth'])->name('index');

Route::get('teams', [TeamController::class, 'list'])->name('teams.list');

Route::get('teams/show/{team}', [TeamController::class, 'show'])->name('teams.show');

Route::get('teams/create', [TeamController::class, 'create'])->name('teams.create');

Route::post('teams/create', [TeamController::class, 'store'])->name('teams.store');

Route::get('teams/edit/{team}', [TeamController::class, 'edit'])->name('teams.edit');

Route::put('teams/edit/{team}', [TeamController::class, 'update'])->name('teams.update');

Route::get('teams/delete/{team}', [TeamController::class, 'delete'])->name('teams.delete');

Route::delete('teams/delete/{team}', [TeamController::class, 'destroy'])->name('teams.destroy');

// Route::get('teams/deleted', [TeamController::class, 'deleted'])->name('teams.deleted');

Route::get('matches', [MatchController::class, 'list'])->name('matches.list');

Route::get('matches/show/{match}', [MatchController::class, 'show'])->name('matches.show');

Route::get('matches/create', [MatchController::class, 'create'])->name('matches.create');

Route::post('matches/create', [MatchController::class, 'store'])->name('matches.store');

Route::get('matches/edit/{match}', [MatchController::class, 'edit'])->name('matches.edit');

Route::put('matches/edit/{match}', [MatchController::class, 'update'])->name('matches.update');

Route::get('matches/delete/{match}', [MatchController::class, 'delete'])->name('matches.delete');

Route::delete('matches/delete/{match}', [MatchController::class, 'destroy'])->name('matches.destroy');

// Route::get('matches/deleted', [MatchController::class, 'deleted'])->name('matches.deleted');

Route::get('players', [PlayerController::class, 'list'])->name('players.list');

Route::get('players/create', [PlayerController::class, 'create'])->name('players.create');

Route::post('players/create', [PlayerController::class, 'store'])->name('players.store');

Route::get('players/show/{player}', [PlayerController::class, 'show'])->name('players.show');

Route::get('players/edit/{player}', [PlayerController::class, 'edit'])->name('players.edit');

Route::put('players/edit/{player}', [PlayerController::class, 'update'])->name('players.update');

Route::get('players/delete/{player}', [PlayerController::class, 'delete'])->name('players.delete');

Route::delete('players/delete/{player}', [PlayerController::class, 'destroy'])->name('players.destroy');



require __DIR__.'/auth.php';
