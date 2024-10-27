<?php

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
    return view('home', [
        'name' => 'rais',
        'role' => 'admin',
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::get('/student_add', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student_edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/student_delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student_destroy/{id}', [StudentController::class, 'destroy']);
Route::get('/students_deleted', [StudentController::class, 'deletedStudent']);
Route::get('/students/{id}/restore', [StudentController::class, 'restore']);



Route::get('/class', [ClassController::class, 'index']);
Route::get('/class_detail/{id}', [ClassController::class, 'show']);
Route::get('/class_add', [ClassController::class, 'create']);
Route::post('/class', [ClassController::class, 'store']);
Route::get('/class_edit/{id}', [ClassController::class, 'edit']);
Route::put('/class/{id}', [ClassController::class, 'update']);



Route::get('/extra', [ExtraController::class, 'index']);
Route::get('/extra_detail/{id}', [ExtraController::class, 'show']);
Route::get('/extra_add', [ExtraController::class, 'create']);
Route::post('/extra', [ExtraController::class, 'store']);
Route::get('/extra_edit/{id}', [ExtraController::class, 'edit']);
Route::put('/extra/{id}', [ExtraController::class, 'update']);



Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher_detail/{id}', [TeacherController::class, 'show']);
Route::get('/teacher_add', [TeacherController::class, 'create']);
Route::post('/teacher', [TeacherController::class, 'store']);
Route::get('/teacher_edit/{id}', [TeacherController::class, 'edit']);
Route::put('/teacher/{id}', [TeacherController::class, 'update']);
