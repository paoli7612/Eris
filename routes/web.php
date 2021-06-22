<?php

use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\YearsController;
use App\Models\Course;
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

Route::get('teachers', [TeachersController::class, 'index']);
Route::get('courses', [CoursesController::class, 'index']);
Route::get('years', [YearsController::class, 'index']);

Route::get('teachers/{slug}', [TeachersController::class, 'details']);
Route::get('courses/{slug}', [CoursesController::class, 'details']);

Route::post('teachers', [TeachersController::class, 'store']);
Route::post('courses', [CoursesController::class, 'store']);


Route::put('courses/{slug}', [CoursesController::class, 'edit']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
