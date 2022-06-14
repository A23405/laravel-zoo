<?php

use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Api\areasController;
use App\Http\Controllers\Api\speciesarchivesController;
use App\Http\Controllers\Api\UsersController;

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
Route::get('/animal_file/{id}', [speciesarchivesController::class, 'show'])->name('animal_file');
//場區
Route::get('/area', [areasController::class, 'index']);

//後台==========================================================================

Route::get('/dashboard', function () {
    return redirect('/back_main');
});
//首頁
Route::get('/back_main', [speciesarchivesController::class, 'backindex'])->name('back_main');
//首頁新增物種
Route::post('/speciesarchives', [speciesarchivesController::class, 'store'])->name('speciesarchives');//打不到
// Route::post('/123', function(){
//     return redirect('/back_main')->with('status','成功');
// })->name('123');
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

//動物各檔
Route::get('/back_individualanimal', function () {
    return view('back_individualanimal');
})->name('back_individualanimal');
//人員管理
Route::get('/back_manager', [UsersController::class, 'index'])->name('back_manager');

require __DIR__ . '/auth.php';
