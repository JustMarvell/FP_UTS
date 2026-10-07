<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');

Route::resource('categories', CategoryController::class)->except('show');
Route::resource('books', BookController::class)->except('show');
