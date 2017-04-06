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
    //首页
    Route::get('/index','admin\AdminController@index');
    //首页 右大块
    Route::get('/indexi','admin\AdminController@indexi');
    //分站列表
    Route::get('/fzlb','admin\AdminController@fzlb');
    //添加分站
    Route::get('/tjfz','admin\AdminController@tjfz');
    //处理添加
    Route::get('/dofztj','admin\AdminController@dotjfz');
    //省
    Route::post('/cs','admin\AdminController@cs');
    //市
    Route::post('/co','admin\AdminController@co');

});
//----------后台END----------//

