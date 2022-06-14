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

//後台==========================================================================
//首頁
Route::get('/back_main', [speciesarchivesController::class, 'backindex'])->name('back_main');
//健康紀錄
Route::get('/back_health_record', function () {
    return view('back_health_record');
})->name('back_health_record');
//就診紀錄
Route::get('/back_medical_record', function () {
    return view('back_medical_record');
})->name('back_medical_record');
//繁殖紀錄
Route::get('/back_breed_record', function () {
    return view('back_breed_record');
})->name('back_breed_record');
//場區
Route::get('/back_area', function () {
    return view('back_area');
})->name('back_area');
//人員管理
Route::get('/back_manager', function () {
    return view('back_manager');
})->name('back_manager');
Route::get('/back_animal', function () {
    return view('back_individualanimal');
})->name('back_individualanimal');

require __DIR__ . '/auth.php';
