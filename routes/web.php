<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('friends', [HomeController::class, 'friends'])->name('friends');
Route::get('account', [HomeController::class, 'account'])->name('account');
Route::get('my_posts', [HomeController::class, 'my_posts'])->name('my_posts');

// details
Route::get('users/{user}', [UsersController::class, 'show']);
Route::get('posts/{post}', [PostController::class, 'show']);

// store new post
Route::post('posts', [PostController::class, 'store']);

// posts of a user
Route::get('posts', [PostController::class, 'user'])->name('posts');
