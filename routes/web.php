<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
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

//dengan perintah ini akan memudahkan untuk membuat routes login dan logout sehinggak nggak perlu membuat lagi
//kecuali yang di blog controller itu cuma custom aja

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//login controller
Route::get('/home', [App\Http\Controllers\BlogController::class, 'index'])->name('home');
//blog controller
Route::get('/', [BlogController::class,'index'])->name('halamanutama');
Route::get('/loginpage', [BlogController::class,'login'])->name('loginpage');
Route::get('/registrasi', [BlogController::class,'registrasi'])->name('registrasi');
Route::post('postregistrasi', [BlogController::class,'postRegistrasi'])->name('postregistrasi');
Route::post('postlogin', [BlogController::class,'customLogin'])->name('postloginblog');
Route::get('/logout', [BlogController::class,'logout'])->name('logoutbtn');

//middleware admin
Route::get('admin/panel', [BlogController::class,'adminpanel'])->name('adminpanel');