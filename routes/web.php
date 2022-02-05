<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\LoginController;


Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', function () {
    return view('index');
});

Route::resource('/outlet', OutletController::class);
Route::resource('/paket', PaketController::class);
Route::resource('/member', MemberController::class);
