<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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

//login
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest'); //cek middleware di kernel
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');


//students
Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student/{id}', [StudentController::class, 'show'])->middleware('auth');
Route::get('/student_add', [StudentController::class, 'create'])->middleware('auth');
Route::post('/student', [StudentController::class, 'store'])->middleware('auth');
Route::get('/student_edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware('auth');
Route::get('/student_delete/{id}', [StudentController::class, 'delete'])->middleware('auth');
Route::delete('/student_destroy/{id}', [StudentController::class, 'destroy'])->middleware('auth');
Route::get('/students_deleted', [StudentController::class, 'deletedStudent'])->middleware('auth');
Route::get('/students/{id}/restore', [StudentController::class, 'restore'])->middleware('auth');

//Class
Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class_detail/{id}', [ClassController::class, 'show'])->middleware('auth');
Route::get('/class_add', [ClassController::class, 'create'])->middleware('auth');
Route::post('/class', [ClassController::class, 'store'])->middleware('auth');
Route::get('/class_edit/{id}', [ClassController::class, 'edit'])->middleware('auth');
Route::put('/class/{id}', [ClassController::class, 'update'])->middleware('auth');

//Extracurricular
Route::get('/extra', [ExtraController::class, 'index'])->middleware('auth');
Route::get('/extra_detail/{id}', [ExtraController::class, 'show'])->middleware('auth');
Route::get('/extra_add', [ExtraController::class, 'create'])->middleware('auth');
Route::post('/extra', [ExtraController::class, 'store'])->middleware('auth');
Route::get('/extra_edit/{id}', [ExtraController::class, 'edit'])->middleware('auth');
Route::put('/extra/{id}', [ExtraController::class, 'update'])->middleware('auth');

//Teacher
Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher_detail/{id}', [TeacherController::class, 'show'])->middleware('auth');
Route::get('/teacher_add', [TeacherController::class, 'create'])->middleware('auth');
Route::post('/teacher', [TeacherController::class, 'store'])->middleware('auth');
Route::get('/teacher_edit/{id}', [TeacherController::class, 'edit'])->middleware('auth');
Route::put('/teacher/{id}', [TeacherController::class, 'update'])->middleware('auth');
