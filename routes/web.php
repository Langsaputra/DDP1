<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

// Admin Controller
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin');

// Route menampilkan 
Route::get('admin/student', [StudentController::class, 'index']);

Route::get('admin/courses', [CoursesController::class, 'index']);