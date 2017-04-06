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

<<<<<<< HEAD
Route::get('/','home\indexController@index');
Route::get('/change_city','home\indexController@change');
=======
Route::get(' / ',function(){
    return  view(' welcome ');
  });
Route::get('/yz','YzController@index');

>>>>>>> 71f4178987b665e5ff3808ea4449c8c986397e11
