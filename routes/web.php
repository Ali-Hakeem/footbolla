<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/league/england', function () {
    return view ('league.england'); });
Route::get('/league/spain', function () {
        return view ('league.spain'); });

Route::get('/livescore', function () {
        return view ('livescore'); });

Route::get('/schedule', function () {
        return view ('scheduled'); });    
        
Route::get('/table', function () {
        return view ('table'); });         

Route::get('/',[AppController::class, 'index']);
Route::get('/player/search',[AppController::class, 'search']);
Route::get('/team',[AppController::class, 'detail']);
Route::get('/player/stats/{id}', [Appcontroller::class, 'stats'] );


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/player/', [WebController::class, 'player'])->name('player')->middleware('auth');
Route::get('/dashboard/player/search',[WebController::class, 'search'])->middleware('auth');