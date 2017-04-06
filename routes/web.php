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

//首页
Route::get('/','home\indexController@index');
//地区切换
Route::get('/change_city','home\indexController@change');
Route::get('/yz','YzController@index');

//----------  后台  ----------//
Route::group(['prefix' => '/admin'],function($a='1'){
    //首页 admin控制器
    Route::get('/index','admin\AdminController@index');

    //首页 右边栏 admin控制器
     Route::get('/indexi','admin\AdminController@indexi');
    //登录视图 方法
    Route::get('/login',function(){ return view('admin.login');  });
    //登录 Login控制器
    Route::post('/Logins','admin\LoginController@Login');
    //退出登录 exit Login控制器
    Route::get('/out','admin\LoginController@out');
    //分站列表
    Route::get('/fzlb','admin\AdminController@fzlb');
    //添加分站
    Route::get('/tjfz','admin\AdminController@tjfz');
    //处理
    Route::post('/dotjfz','admin\AdminController@dotjfz');
        //首页 右边栏 admin控制器
        Route::get('/indexi','admin\AdminController@indexi');

    //登录视图 方法
    Route::get('/login',function(){ return view('admin.login');  });
        //登录 Login控制器
        Route::post('/Logins','admin\LoginController@Login');
        //退出登录 exit Login控制器
         Route::get('/out','admin\LoginController@out');
});
//----------后台END----------//

