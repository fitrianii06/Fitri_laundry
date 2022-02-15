<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;


Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', function () {
    return view('index');
});

Route::resource('/outlet', OutletController::class);
Route::resource('/paket', PaketController::class);
Route::resource('/member', MemberController::class);

    Route::group(['prefix' =>'a','middleware' =>['isAdmin','auth']],function(){  
    Route::get('home',[Homecontroller::class, 'index'])->name('a.home');
    Route::resource('member', MemberController::class);
    Route::resource('paket', PaketController::class);
    Route::resource('outlet', OutletController::class);
    Route::get('transaksi',[TransaksiController::class, 'index']);
    Route::get('laporan',[LaporanController::class, 'index']);
 
 });
 
 Route::group(['prefix' =>'k','middleware' =>['isKasir','auth']],function(){  
     Route::get('home',[Homecontroller::class, 'index'])->name('k.home');
     Route::resource('member', MemberController::class);
     Route::resource('paket', PaketController::class);
     Route::resource('outlet', OutletController::class);
     Route::get('transaksi',[TransaksiController::class, 'index']);
     Route::get('laporan',[LaporanController::class, 'index']);
 });
 
 Route::group(['prefix' =>'o','middleware' =>['isOwner','auth']],function(){  
     Route::get('home',[Homecontroller::class, 'index'])->name('o.home');
     Route::get('laporan',[LaporanController::class, 'index']);
 });