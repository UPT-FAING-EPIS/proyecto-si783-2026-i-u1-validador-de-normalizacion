<?php

use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EsquemaController;
use App\Http\Controllers\Api\PuzzleController;
use App\Http\Controllers\Api\RetoController;
use App\Http\Controllers\Api\ValidacionController;
use App\Http\Middleware\CheckAdminRole;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/validar', [ValidacionController::class, 'validar']);
Route::get('/puzzles', [PuzzleController::class, 'index']);
Route::get('/retos', [RetoController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);
    
    Route::apiResource('/esquemas', EsquemaController::class);
    
    Route::post('/puzzles/{puzzle}/resolver', [PuzzleController::class, 'resolver']);
    Route::get('/puzzles/{puzzle}/intento', [PuzzleController::class, 'intento']);
    
    Route::get('/retos/activo', [RetoController::class, 'activo']);
    Route::post('/retos/{reto}/participar', [RetoController::class, 'participar']);
    Route::get('/retos/{reto}/ranking', [RetoController::class, 'ranking']);
});

Route::middleware(['auth:sanctum', CheckAdminRole::class])->prefix('admin')->group(function () {
    Route::get('/puzzles', [AdminController::class, 'puzzles']);
    Route::post('/puzzles', [AdminController::class, 'storePuzzle']);
    Route::put('/puzzles/{puzzle}', [AdminController::class, 'updatePuzzle']);
    Route::delete('/puzzles/{puzzle}', [AdminController::class, 'destroyPuzzle']);
    
    Route::get('/retos', [AdminController::class, 'retos']);
    Route::post('/retos', [AdminController::class, 'storeReto']);
    Route::put('/retos/{reto}', [AdminController::class, 'updateReto']);
    Route::delete('/retos/{reto}', [AdminController::class, 'destroyReto']);
    
    Route::post('/users/{user}/disable', [AdminController::class, 'disable']);
    Route::post('/users/{user}/enable', [AdminController::class, 'enable']);
    Route::get('/users/{user}/history', [AdminController::class, 'history']);
    
    Route::get('/logs', [AdminController::class, 'logs']);
});