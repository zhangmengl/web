<?php

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
//前台
Route::prefix('index/')->group(function () {
    Route::get("/user/reg","Index\UserController@reg");//前台注册
    Route::post("/user/regDo","Index\UserController@regDo");//执行注册
    Route::get("/user/login","Index\UserController@login");//前台登录
    Route::post("/user/loginDo","Index\UserController@loginDo");//执行登录
    Route::middleware("isLogin")->get("/user/userCenter","Index\UserController@userCenter");//个人中心
});
Route::get('/jiajunshuai','Index\UserController@jiajunshuai');//