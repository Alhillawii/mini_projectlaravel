<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/index', function () {
    return view('layouts.index');
});


Route::get('/dash', function () {
    return view('layouts/dashboard');
});

Route::get('/admin', function () {
    return view('admin/admins');
});

Route::resource('products',ProductController::class);

Route::resource('categories',CategoryController::class);