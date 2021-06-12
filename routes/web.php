<?php

use App\Http\Controllers\TeachersController;
use App\Http\Controllers\CoursesController;
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
    return redirect('home');
});

Route::get('home', function () {
    return view('home');
});
Route::get('teachers', [TeachersController::class, 'index']);
Route::put('teachers', [TeachersController::class, 'store']);

Route::get('courses', [CoursesController::class, 'index']);
Route::put('courses', [CoursesController::class, 'store']);
