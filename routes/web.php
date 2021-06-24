<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\YearController;

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

Route::get('/', [HomeController::class, 'index']);

// index
Route::get('teachers', [TeacherController::class, 'index']);
Route::get('courses', [CourseController::class, 'index']);
Route::get('years', [YearController::class, 'index']);

// details
Route::get('teachers/{teacher}', [TeacherController::class, 'details']);
Route::get('courses/{course}', [CourseController::class, 'details']);
Route::get('years/{year}', [YearController::class, 'details']);

// store
Route::post('teachers', [TeacherController::class, 'store']);
Route::post('courses', [CourseController::class, 'store']);
Route::post('years', [YearController::class, 'init']);
Route::post('courses/{$id}', [CourseController::class, 'teaches']);

// edit
Route::put('courses/{id}', [CourseController::class, 'edit']);
Route::put('teachers/{teacher}', [TeacherController::class, 'edit']);

// delete
Route::delete('courses/{id}', [CourseController::class, 'delete']);
Route::delete('teachers/{id}', [TeacherController::class, 'delete']);
