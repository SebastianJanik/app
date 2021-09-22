<?php

use App\Http\Controllers\Components\TimetableController;
use App\Http\Controllers\LeaguesController;
use App\Http\Controllers\MatchTeamsController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TeamUsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/leagues/create', [LeaguesController::class, 'create'])->name('leagues_create');
Route::post('/leagues', [LeaguesController::class, 'store'])->name('leagues_store');
Route::get('/leagues', [LeaguesController::class, 'index'])->name('leagues_index');

Route::get('/teams/create', [TeamsController::class, 'create'])->name('teams_create');
Route::post('/teams', [TeamsController::class, 'store'])->name('teams_store');

Route::get('/seasons/create', [SeasonsController::class, 'create'])->name('seasons_create');
Route::post('/seasons', [SeasonsController::class, 'store'])->name('seasons_store');
Route::get('/seasons', [SeasonsController::class, 'index'])->name('seasons_index');

Route::get('/team-users/create', [TeamUsersController::class, 'create'])->name('team_users_create');
Route::get('/team-users/create-data', [TeamUsersController::class, 'createData']);
Route::post('/team-users', [TeamUsersController::class, 'store'])->name('team_users_store');

//Route::match([''],'/team-users/test', [TeamUsersController::class, 'test'])->name('team_users_test'); get i post


Route::get('/matchteams/create', [MatchTeamsController::class, 'create'])->name('match_teams_create');





