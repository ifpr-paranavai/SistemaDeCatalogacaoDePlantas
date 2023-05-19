<?php

use App\Http\Controllers\ClassePlantaController;
use App\Http\Controllers\OrdemDaPlantaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'ordens-plantas'], function() {
    Route::get('/', [OrdemDaPlantaController::class, 'index']);
    Route::get('/{id}', [OrdemDaPlantaController::class, 'show']);
    Route::post('/', [OrdemDaPlantaController::class, 'store']);
    Route::put('/{id}', [OrdemDaPlantaController::class, 'update']);
    Route::delete('/{id}', [OrdemDaPlantaController::class, 'destroy']);
});

Route::group(['prefix' => 'classe-plantas'], function() {
    Route::get('/', [ClassePlantaController::class, 'index']);
    Route::get('/{id}', [ClassePlantaController::class, 'show']);
    Route::post('/', [ClassePlantaController::class, 'store']);
    Route::put('/{id}', [ClassePlantaController::class, 'update']);
    Route::delete('/{id}', [ClassePlantaController::class, 'destroy']);
});