<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageUploadController;

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

Route::resource('movies', MoviesController::class);


Route::get('image-upload', [ ImageUploadController::class, 'getImageUploadForm' ])->name('get.imageupload');
Route::post('image-upload', [ ImageUploadController::class, 'store' ])->name('store.image');

