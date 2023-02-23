<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController as PagesController;
use App\Http\Controllers\ComicsController as ComicsController;

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

Route::get('', [PagesController::class, 'index'])->name('home');
Route::resource('comics',ComicsController::class);
//Route::get('comics/{comicSlug}', [ComicController::class, 'getComic'])->name('comic');
