<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Api\areasController;
use App\Http\Controllers\Api\speciesarchivesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//場區
Route::get('/area', [areasController::class, 'index']);

//首頁
Route::get('/speciesarchives', [speciesarchivesController::class, 'index']);
// Route::get('/speciesarchives', function () {
//     return view('SpeciesArchivesTest');
// });
Route::get('/speciesarchives_search', [speciesarchivesController::class, 'search']);



require __DIR__ . '/auth.php';
