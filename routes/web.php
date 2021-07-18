<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
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
    return view('out');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/professori', [HomeController::class, 'professori'])->name('professori');
Route::get('/materie', [HomeController::class, 'materie'])->name('materie');
Route::get('/lezioni', [HomeController::class, 'lezioni'])->name('lezioni');

Route::get('lezioni/{lesson}', [LessonController::class, 'show'])->name('lezione');
