<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Admin Controller
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin');