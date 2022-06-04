<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\areasController;
use App\Http\Controllers\Api\speciesarchivesController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('area', areasController::class);

//場區
Route::get('area', [areasController::class, 'index']);
Route::post('area', [areasController::class, 'store']);
Route::patch('area/{id}', [areasController::class, 'update']);
Route::delete('area/{id}', [areasController::class, 'destroy']);
Route::get('area/{id}', [areasController::class, 'show']);
//物種資料
Route::get('speciesarchives', [speciesarchivesController::class, 'index']);
Route::post('speciesarchives', [speciesarchivesController::class, 'store']);
Route::patch('speciesarchives/{id}', [speciesarchivesController::class, 'update']);
Route::delete('speciesarchives/{id}', [speciesarchivesController::class, 'destroy']);
Route::get('speciesarchives/{id}', [speciesarchivesController::class, 'show']);
//動物個資