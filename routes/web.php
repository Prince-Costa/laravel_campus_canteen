<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('/category', CategoryController::class);

