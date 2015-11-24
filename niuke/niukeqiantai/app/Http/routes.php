<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get("/",                 "UserController@index");			//首页
Route::get("register",          "UserController@register");			//注册
Route::get("login",             "UserController@login");			//登陆
//Route::get("register_user",     "UserController@register_user");	//
Route::post("register_info",    "UserController@register_info");	//登陆信息
Route::get("completeness",		"UserController@completeness");		//完善信息
Route::post("nickname",			"UserController@nickname");			//昵称
Route::get("contestroom",		"ContestController@contestroom");	//题库
Route::get("zhuanxiang",		"IndexController@zhuanxiang");		//专项练习
Route::get("jinhua",			"IndexController@jinhua");			//精华专题
Route::get("biancheng",			"IndexController@biancheng");		//在线编程
Route::get("shiti",				"IndexController@shiti");			//试题广场
Route::get("jingpin",			"IndexController@jingpin");			//精品课程
Route::get("zhibo",				"IndexController@zhibo");			//直播课程

Route::Controller('/',          'ContestController');

Route::post("checklogin",     "UserController@checklogin");
Route::get('loginindex', "IndexController@index");
Route::get('zhenti', "IndexController@zhenti");
Route::get('ranking', "IndexController@ranking");
