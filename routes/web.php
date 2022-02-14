<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostsController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [IndexController::class, 'home'])->name('home');
    Route::get('/create', [IndexController::class, 'create'])->name('create');
    Route::get('/video', [IndexController::class, 'video'])->name('video');
    Route::get('/record', [IndexController::class, 'record'])->name('record');
    Route::get('/spi', [IndexController::class, 'spi'])->name('spi');
    Route::post('/store', [PostsController::class, 'store'])->name('store');
});
