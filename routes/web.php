<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
//direct use of middleware on route
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

//routing
Route::get('/', function () {
    return view(view: 'welcome');
});
Route::view('/home','home');

//group middleware
Route::view('/about','about')->middleware('check1');
Route::view('/about/{name}','about');

//direct use of middleware on route
Route::view('/form','user_form')->middleware([CountryCheck::class, AgeCheck::class]);


Route::get('home',[UserController::class,'getUser']);
// Route::get('aboutuser/{name}',[UserController::class,'aboutUser']);

//form
// Route::post('adduser', [UserController::class,'addUser']);

Route::post('adduser', [UserController::class,'addUser']);


Route::controller(UserController::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    Route::get('aboutuser/{name}','about');

});

//group of middle ware
// Route::middleware('check1')->group(function(){
//     //all routes here for group
// });

Route::get('user',[UserController::class,'user']);
// Route::view('/user','user');

