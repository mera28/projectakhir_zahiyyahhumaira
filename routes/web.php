<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});

Route::resource('pengguna',UserController::class)->except('destroy','create','show','update','edit');

Route::resource('produk',ProductController::class);