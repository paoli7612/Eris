<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/teachers', [HomeController::class, 'index'])->name('teachers');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');

Route::get('users/{user}', [HomeController::class, 'index'])->name('account');
Route::get('users/{user}/settings', [HomeController::class, 'index'])->name('settings');
