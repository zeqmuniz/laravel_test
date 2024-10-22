<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/home', function(){
    return view('home');
});
Route::view('/home','home'); 
Route::redirect('/home','/');

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ["name"=>$name]);
});

Route::view('admin', 'admin.login');
Route::get('user',[UserController::class,'getUser']);
Route::get('user-about/{name}',[UserController::class,'UserAbout']);
Route::get('admin-login',[UserController::class,'adminLogin']);
*/
Route::get('user-about',[UserController::class,'UserAbout']);
Route::get('user-home',[UserController::class,'UserHome']);
Route::get('user-form',[UserController::class,'UserForm']);
Route::post('addUser',[UserController::class,'addUser']);