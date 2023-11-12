<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// change password
Route::get('/changePassword', function () {
    return view('changePassword.index');
});
// register
Route::get('/register',[RegisterController::class, 'register'])->name('register')->middleware('guest');
// register post
Route::post('/actionregister',[RegisterController::class, 'store'])->name('actionregister');
// login
Route::get('/',[LoginController::class, 'login'])->name('/');
// post login
Route::post('/actionLogin',[LoginController::class, 'actionlogin'])->name('actionLogin');
// home
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
// ketika tombol logout diclick dikirm aksi
Route::post('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// dashboard
Route::get('/dashboard',function(){
    return view('dashboard.index');
}); 
