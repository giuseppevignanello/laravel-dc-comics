<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/comics', [PageController::class, 'comics'])->name('comics');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::resource('/admin/comics', ComicController::class);
Route::resource('/admin/movies', MovieController::class);