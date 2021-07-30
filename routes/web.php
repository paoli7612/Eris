<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/account', [HomeController::class, 'account'])->name('account');
Route::get('/settings', [HomeController::class, 'settings'])->name('settings');

Route::get('lessons/new', [HomeController::class, 'new_lesson'])->name('new-lesson');
Route::post('lessons/new', [LessonController::class, 'store'])->name('new-lesson');

Route::get('/student/{user}', [UserController::class, 'user'])->name('student');
Route::get('/teacher/{user}', [UserController::class, 'user'])->name('teacher');

Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lesson');
