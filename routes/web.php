<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])
    ->middleware('auth')
    ->name('home');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course');

Route::get('/lessons', [LessonController::class, 'index'])->name('lessons');
Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lesson');
Route::get('/lessons/{lesson}/settings', [LessonController::class, 'settings'])->name('lesson.settings');
Route::get('/lessons/{lesson}/details', [LessonController::class, 'details'])->name('lesson.details');

Route::get('/user/{user}', [UserController::class, 'show'])->name('user');
Route::get('/user/{user}/settings', [UserController::class, 'settings'])->name('user.settings');
Route::post('/user/{user}/settings', [UserController::class, 'edit'])->name('user.settings');

Route::get('/search', [HomeController::class, 'search'])->name('search');
