<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtraController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Extra;
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


Route::get('/class', [ClassController::class, 'index']);
Route::get('/class_detail/{id}', [ClassController::class, 'show']);



Route::get('/extra', [ExtraController::class, 'index']);
Route::get('/extra_detail/{id}', [ExtraController::class, 'show']);

Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher_detail/{id}', [TeacherController::class, 'show']);
