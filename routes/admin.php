<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Admin;

Route::prefix('admin')->name('admin.')->group(function(){
      Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
              Route::view('/login','back.pages.admin.auth.login')->name('login');
              Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
              Route::view('/forget_password','back.pages.admin.auth.forget_password')->name('forget_password');
              Route::post('/send_mail',[AdminController::class,'send_mail'])->name('send_mail');
              Route::get('/password/reset/{token}',[AdminController::class,'resetPassword'])->name('reset-password');
              

      });

      Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
          Route::view('/home','back.pages.admin.home')->name('home'); 
          Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');  
          //onclick="event.preventDefault();document.getElementsById('adminLogoutForm').submit();"
      });
});