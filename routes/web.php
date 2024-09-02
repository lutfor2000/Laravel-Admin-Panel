<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\DeshboardController;

Route::get('/', function () {
    return view('welcome');
});
//=============================AuthController Start===========================>
//----------Registration Start----->
Route::get('/registration/page', [AuthController::class, 'Registration'])->name('registration');
Route::post('post/registration/page', [AuthController::class, 'RegistrationPost'])->name('registration_post');
//----------Registration End----->

//----------Login Start----->
Route::get('/login/page', [AuthController::class, 'LoginPage'])->name('loginpage');
Route::post('/post/login', [AuthController::class, 'LoginPost'])->name('loginpost');
//----------Login End----->

//----------Logout Start----->
Route::get('/logout', [AuthController::class, 'Logout'])->name('logout');
//----------Logout End----->

//----------Forgot Password Start----->
Route::get('/forgot/password/page', [AuthController::class, 'ForgotPassword'])->name('forgotpassword');
Route::post('post/forgot/password', [AuthController::class, 'ForgotPasswordPost'])->name('forgotpasswordPost');
Route::get('new/forgot/password/{token}', [AuthController::class, 'NewForgotPassword'])->name('newforgotpassword');
//----------Forgot Password End----->
//=============================AuthController End===========================>

Route::get('/home', [HomeController::class, 'Home'])->name('home');

//=============================User middleware Start===========================>  
Route::group(['middleware' => 'user'], function(){
      Route::get('user/deshboard', [DeshboardController::class, 'Dashboard'])->name('userdesgboard');
});
//=============================User middleware EndS===========================>

//=============================Admin middleware Start===========================>
Route::group(['middleware' => 'admin'], function(){
      Route::get('admin/deshboard', [DeshboardController::class, 'Dashboard'])->name('admindesgboard');
});
//=============================Admin middleware EndS===========================>

//=============================Super Admin middleware Start===========================>
Route::group(['middleware' => 'superadmin'], function(){
      Route::get('super/admin/deshboard', [DeshboardController::class, 'Dashboard'])->name('superadmindesgboard');
});
//=============================Super Admin middleware EndS===========================>

//=============================AuthController Start===========================>
//=============================AuthController End===========================>

