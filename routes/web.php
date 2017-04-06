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


Route::get('/','home\indexController@index');
Route::get('/change_city','home\indexController@change');
Route::get('/yz','YzController@index');

//----------  后台  ----------//
Route::group(['prefix' => '/admin'],function($a='1'){
    //首页
    Route::get('/index','admin\AdminController@index');
        //首页 右大块
        Route::get('/indexi','admin\AdminController@indexi');
});
//----------后台END----------//

