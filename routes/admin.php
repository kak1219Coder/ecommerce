<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Admin;

Route::prefix('admin')->name('admin.')->group(function(){
      Route::middleware(['guest:admin'])->group(function(){
              Route::view('/login','back.pages.admin.auth.login')->name('login');
              Route::post('/login_handler',[AdminController::class,'loginHandler'])->name('login_handler');
      });

      Route::middleware(['auth:admin'])->group(function(){
          Route::view('/home','back.pages.admin.home')->name('home'); 
          Route::post('/logout_handler',[AdminController::class,'logoutHandler'])->name('logout_handler');  
          //onclick="event.preventDefault();document.getElementsById('adminLogoutForm').submit();"
      });
});