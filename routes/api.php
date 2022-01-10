<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PemainController;
use App\Http\Controllers\Api\LigaController;
use App\Http\Controllers\Api\KlubController;
use App\Http\Controllers\Api\PosisiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// user 
Route::get('/user',[UserController::class, 'UserIndex']);
Route::post('/user/store',[UserController::class, 'UserStore']);
Route::get('/user/edit/{id}',[UserController::class, 'UserEdit']);
Route::post('/user/update/{id}',[UserController::class, 'UserUpdate']);
Route::get('/user/delete/{id}',[UserController::class, 'UserDelete']);

// Posisi
Route::get('/posisi',[PosisiController::class, 'PosisiIndex']);
Route::post('/posisi/store',[PosisiController::class, 'PosisiStore']);
Route::get('/posisi/edit/{id}',[PosisiController::class, 'PosisiEdit']);
Route::post('/posisi/update/{id}',[PosisiController::class, 'PosisiUpdate']);
Route::get('/posisi/delete/{id}',[PosisiController::class, 'PosisiDelete']);

// Pemain
Route::get('/pemain',[PemainController::class, 'PemainIndex']);
Route::post('/pemain/store',[PemainController::class, 'PemainStore']);
Route::get('/pemain/edit/{id}',[PemainController::class, 'PemainEdit']);
Route::post('/pemain/update/{id}',[PemainController::class, 'PemainUpdate']);
Route::get('/pemain/delete/{id}',[PemainController::class, 'PemainDelete']);

// Liga
Route::get('/liga',[LigaController::class, 'LigaIndex']);
Route::post('/liga/store',[LigaController::class, 'LigaStore']);
Route::get('/liga/edit/{id}',[LigaController::class, 'LigaEdit']);
Route::post('/liga/update/{id}',[LigaController::class, 'LigaUpdate']);
Route::get('/liga/delete/{id}',[LigaController::class, 'LigaDelete']);

// Klub
Route::get('/klub',[KlubController::class, 'KlubIndex']);
Route::post('/klub/store',[KlubController::class, 'KlubStore']);
Route::get('/klub/edit/{id}',[KlubController::class, 'KlubEdit']);
Route::post('/klub/update/{id}',[KlubController::class, 'KlubUpdate']);
Route::get('/klub/delete/{id}',[KlubController::class, 'KlubDelete']);

