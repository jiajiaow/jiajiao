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
Route::get('/mobile/{a?}/{b?}/{c?}','home\indexController@index');
//手机登录
Route::get('/mobile/login','home\indexController@login');
Route::get('/yz','YzController@index');
//登录
Route::get('/login.html',function(){
    session()->forget("tc_phone");
    session()->forget("tc_name");
    return view('home.login');
});
////处理执行教师登录
Route::post('/dologin.html','home\LoginController@dologin');
//教师注册
Route::get('/reg.html',function(){ return view('home.reg');  });
//处理执行教师注册
Route::post('/doreg.html','home\LoginController@doreg');
//处理执行发送教师注册验证码
Route::post('/docode.html','home\LoginController@docode');
//前台退出登录
Route::get('/outlogin.html','home\LoginController@outlogin');
//个人中心
Route::get('/teacherinfo.html','home\teacherinfoController@index');
//处理个人中心
Route::post('/doteacherinfo.html','home\teacherinfoController@doteacherinfo');
//省
Route::post('/sheng','home\teacherinfoController@sheng');
//县
Route::post('/xian','home\teacherinfoController@xian');
//当前的区
Route::post('/qu','home\teacherinfoController@qu');
//修改教学授课科目信息
Route::post('/dokemu.html','home\teacherinfoController@dokemu');
//生成假数据
Route::get('/jia.html','home\indexController@jia');
//教师详细
Route::get('/teacher/detail/{m?}.html','home\teacherinfoController@teacher');
//学员库
Route::get('/xueyuan.html','home\xueshenController@xueyuan');

//zl预约老师
Route::get('/yuyuelaoshi.html/{a?}/{b?}/{c?}/{d?}','home\yuyueController@index');
//预约验证码
Route::post('/register','home\yuyueController@register');
//查询验证码
Route::post('/registerdo','home\yuyueController@registerdo');
//提交数据
Route::post('/yuyuexiangxi.html','home\yuyueController@doyyform');
//填写预约详细
Route::any('/yuyuexxform','home\yuyueController@yuyuexxform');
//提交
Route::post('/StudentAdd','home\yuyueController@StudentAdd');
//测试
Route::get('/test','testController@index');
//德栗教员库
Route::get('/faculty.html','home\teacherinfoController@faculty');
//资费说明
Route::get('/zfsm.html','home\zfsmController@index');









//----------  后台  ----------//
//登录视图 方法
Route::get('/admin/login',function(){ return view('admin.login');  });
//登录 Login控制器
Route::post('/admin/Logins','admin\LoginController@login');
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
    //学生订单
    Route::get('/xsdd','admin\orderController@xsdd');
    //教师订单
    Route::get('/jsdd','admin\orderController@jsdd');
});
//----------后台END----------//
