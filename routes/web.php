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


// ->middleware(['auth'])->name('dashboard'); 登入要用

//首頁
Route::get('/', [speciesarchivesController::class, 'index']);
Route::get('/search', [speciesarchivesController::class, 'search']);
// Route::get('/speciesarchives', function () {
//     return view('SpeciesArchivesTest');
// });
//動物各檔
Route::get('/animal_file', function () {
    return view('animal_file');
})->name('animal_file');
//場區
Route::get('/area', [areasController::class, 'index']);



require __DIR__ . '/auth.php';
