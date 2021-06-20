<?php

use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\YearsController;
use Illuminate\Support\Facades\Route;
use App\Models\Year;

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
    return redirect('home');
});

Route::get('home', function () {
    return view('home');
});
Route::get('teachers/{slug}', [TeachersController::class, 'details']);
Route::get('teachers', [TeachersController::class, 'index']);
Route::put('teachers', [TeachersController::class, 'store']);
Route::delete('teachers/{id}', [TeachersController::class, 'delete']);

Route::get('courses/{slug}', [CoursesController::class, 'details']);
Route::get('courses', [CoursesController::class, 'index']);
Route::put('courses', [CoursesController::class, 'store']);
Route::delete('courses/{id}', [CoursesController::class, 'delete']);
Route::put('courses/{id}', [CoursesController::class, 'edit']);

Route::get('years', [YearsController::class, 'index']);
Route::get('years/init', [YearsController::class, 'init']);
Route::get('years/{slug}', [YearsController::class, 'details']);
