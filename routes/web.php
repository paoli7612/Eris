<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TeacherController;
use App\Models\Lesson;
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
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/courses', [CourseController::class, 'index'])->name('course.all');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.show');

Route::get('/lessons', [LessonController::class, 'index'])->name('lesson.all');
Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lesson.show');

Route::get('/teachers', [TeacherController::class, 'all'])->name('teacher.all');
Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('teacher.show');
