<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MaterialController;
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

/* Home */ Route::get('/', [HomeController::class, 'home'])->name('home');
/* Courses */ Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    /* show */Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course');

/* Teachers */ Route::get('/teachers', [UserController::class, 'index'])->name('teachers');
    /* show */ Route::get('/teachers/{user}', [UserController::class, 'show'])->name('teacher');

/* Lessons */ Route::get('/lessons', [LessonController::class, 'index'])->name('lessons');
    /* new? */ Route::get('/lessons?new', [LessonController::class, 'index'])->name('lessons?new');
    /* show */ Route::get('/lessons/{lesson}', [LessonController::class, 'show'])->name('lesson');
    /* store */ Route::post('/lessons', [LessonController::class, 'store'])->name('lesson.store');
    /* edit */ Route::put('/lessons/{lesson}', [LessonController::class, 'edit'])->name('lesson.edit');
    /* delete */ Route::delete('/lessons/{lesson}', [LessonController::class, 'delete'])->name('lesson.delete');

/* Account */ Route::get('/account', [UserController::class, 'show'])->name('account');
    /* delete! */ Route::post('/account/delete', [HomeController::class, 'remove'])->name('account.delete');
    /* settings! */ Route::put('/account/settings', [UserController::class, 'edit'])->name('account.settings');

