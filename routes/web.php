<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//routing
Route::get('/', function () {
    return view(view: 'welcome');
});
Route::view('/home','home');
// Route::view('/home/profile/user','home')->name('home');


Route::view('/about','about');
Route::view('/about/{name}','about');
Route::view('/form','user_form');


Route::get('home',[UserController::class,'getUser']);
// Route::get('aboutuser/{name}',[UserController::class,'aboutUser']);

//form
// Route::post('adduser', [UserController::class,'addUser']);

Route::post('adduser', [UserController::class,'addUser']);

