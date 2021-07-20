<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
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
    return view('out');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('account', [HomeController::class, 'account'])->name('account');
Route::get('lezioni', [HomeController::class, 'lezioni'])->name('lezioni');
Route::get('materie', [HomeController::class, 'materie'])->name('materie');
Route::get('professori', [HomeController::class, 'professori'])->name('professori');
Route::get('nuova-lezione', [HomeController::class, 'nuova_lezione'])->name('nuova-lezione');

Route::get('lezioni?docente={id}', [HomeController::class, 'lezioni'])->name('lezioni-cerca');

Route::get('professori/{teacher}', [TeacherController::class, 'show'])->name('professore');
Route::get('studenti/{student}', [StudentController::class, 'show'])->name('professore');

Route::get('lezioni/{lesson}', [LessonController::class, 'show'])->name('lezione');
Route::get('lezioni/{lesson}/modifica', [LessonController::class, 'modifica'])->name('modifica-lezione');
Route::get('lezioni/{lesson}/elimina', [LessonController::class, 'elimina'])->name('elimina-lezione');

Route::post('lezioni', [LessonController::class, 'store']);
Route::put('lezioni/{lesson}', [LessonController::class, 'edit']);
Route::delete('lezioni/{id}', [LessonController::class, 'delete']);
