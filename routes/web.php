<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/info', [InfoController::class, 'index'])->name('info');

Route::post('/info', [InfoController::class, 'store']);

Route::get('/account/{user}', [HomeController::class, 'account'])->name('account');
Route::post('/account/{user}', [AccountController::class, 'follow']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
