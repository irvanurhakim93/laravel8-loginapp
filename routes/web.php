<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
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
    return view('welcome');
});

//login controller
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//blog controller
Route::get('/blog', [BlogController::class,'index'])->name('halamanutama');
Route::get('/blog/login', [BlogController::class,'login'])->name('loginblog');
Route::get('/blog/registrasi', [BlogController::class,'registrasi'])->name('registrasi');
Route::post('/blog/postregistrasi', [BlogController::class,'postRegistrasi'])->name('postregistrasi');
Route::post('/blog/postlogin', [BlogController::class,'customLogin'])->name('postloginblog');

Route::get('/blog/logout', [BlogController::class,'logout'])->name('logout');