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
Route::get('/change_city.html','home\indexController@change');
//手机入口
Route::get('/mobile','home\indexController@index');
//手机登录
Route::get('/mobile/login','home\indexController@login');
Route::get('/yz','YzController@index');


//----------  后台  ----------//
//登录视图 方法
Route::get('/admin/login',function(){ return view('admin.login');  });
//登录 Login控制器
Route::post('/admin/Logins','admin\LoginController@Login');
//路由群组 中间件 拒绝后台未登录访问页面
Route::group(['prefix' => '/admin',"middleware"=>"CheckAge"],function(){
    //首页 admin控制器
    Route::get('/index','admin\AdminController@index');
    //首页 右边栏 admin控制器
     Route::get('/indexi','admin\AdminController@indexi');
    //退出登录 exit Login控制器
    Route::get('/out','admin\LoginController@out');
    //分站列表
    Route::get('/fzlb','admin\AdminController@fzlb');
    //添加分站
    Route::get('/tjfz','admin\AdminController@tjfz');
    //处理添加分站
    Route::post('/dotjfz','admin\AdminController@dotjfz');
    //例：北京市 湖南省
    Route::post('/sheng','admin\AdminController@sheng');
    //市辖县
    Route::post('/xian','admin\AdminController@xian');
    //编辑分站
    Route::any('/bjfz{id?}','admin\AdminController@bjfz');
    //处理编辑分站
    Route::any('/dobjfz','admin\AdminController@dobjfz');
    //分站停用
    Route::get('/fzty/{id?}','admin\AdminController@fzty');
    //分站起用
    Route::get('/fzqy/{id?}','admin\AdminController@fzqy');
    //处理删除分站
    Route::any('/fzlb_del','admin\AdminController@fzlb_del');
    //导航
    Route::get('/daohang','admin\DaohangController@daohang');
    //导航----添加一级分类
    Route::get('/yiji','admin\DaohangController@yiji');
    //处理导航----添加一级分类
    Route::post('/doyiji','admin\DaohangController@doyiji');
    //导航----添加二级分类
    Route::get('/erji/{id?}','admin\DaohangController@erji');
    //处理导航----添加一级分类
    Route::post('/doerji','admin\DaohangController@doerji');
    //导航----添加三级分类
    Route::get('/sanji','admin\DaohangController@sanji');
    //处理导航----添加三级分类
    Route::post('/dosanji','admin\DaohangController@dosanji');
    //处理导航修改
    Route::get('/dhedit/{id?}/{fl?}','admin\DaohangController@dhedit');
    //处理导航删除
    Route::post('/dhdel','admin\DaohangController@dhdel');
    //处理导航修改
    Route::post('/dodhedit','admin\DaohangController@dodhedit');
});
//----------后台END----------//

