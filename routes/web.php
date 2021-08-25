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

Route::get('/welcome', function () {
    return view('main.welcome');
})->name('welcome')->middleware('guest');
Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/account/delete', [HomeController::class, 'delete'])->name('account.delete');
Route::post('/account/delete', [HomeController::class, 'remove']);
Route::get('/account/settings', [HomeController::class, 'settings'])->name('settings');
Route::put('/account/settings', [HomeController::class, 'edit']);
Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course');

Route::get('/lessons', [LessonController::class, 'index'])->name('lessons');
Route::get('/lessons/new', [LessonController::class, 'new'])->name('lesson.new')->middleware('auth');
Route::post('/lessons/new', [LessonController::class, 'store'])->middleware('auth');
Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lesson');
Route::put('/lessons/{lesson}', [LessonController::class, 'edit'])->name('lesson.edit');

Route::get('/user/{user}', [UserController::class, 'show'])->name('user');

Route::get('/search', [LessonController::class, 'search'])->name('search');

Route::get('/teachers', [UserController::class, 'index'])->name('teachers');
Route::get('/teachers/{user}', [UserController::class, 'show'])->name('teacher');
