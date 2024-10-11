<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\StatController;


Route::resource('teams', TeamController::class);
Route::get('/teams/{team}/addPlayer', [TeamController::class, 'showAddPlayerForm'])->name('teams.showAddPlayerForm');
Route::post('/teams/{team}/addPlayer', [TeamController::class, 'addPlayer'])->name('teams.addPlayer');
Route::resource('players', PlayerController::class);
Route::resource('coaches', CoachController::class);
Route::resource('games', GameController::class);
Route::resource('stats', StatController::class);


