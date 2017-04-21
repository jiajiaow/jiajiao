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
   // session()->forget("tc_phone");
    //session()->forget("tc_name");
    return view('home.login');
});
//登录
Route::get('/stlogin.html',function(){
  //  session()->forget("st_phone");
   // session()->forget("st_name");
    return view('home.stlogin');
});
//处理执行教师登录
Route::post('/dologin.html','home\LoginController@dologin');
//处理执行学员登录
Route::post('/dostlogin.html','home\LoginController@dostlogin');
//教师注册
Route::get('/reg.html',function(){ return view('home.reg');  });
//处理执行教师注册
Route::post('/doreg.html','home\regController@doreg');
//处理执行发送教师注册验证码
Route::post('/docode.html','home\regController@docode');
//前台退出登录
Route::get('/outlogin.html','home\LoginController@outlogin');
//教员个人中心
Route::get('/teacherinfo.html','home\teacherinfoController@index');
//处理教员个人中心
Route::post('/doteacherinfo.html','home\teacherinfoController@doteacherinfo');
//用户个人中心 stinfo栗志  stinfo2德栗
Route::get('/stinfo.html','home\stinfoController@stinfo');
Route::get('/stinfo2.html','home\stinfoController@stinfo2');
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
//筛选学员库
Route::get('/xueyuans/{y?}.html','home\xueshenController@xueyuans');
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
//预约教员
Route::post('/yuyuexiangxi/yy/{id?}.html','home\yuyueController@doyyforms');

//德栗教员库
Route::get('/faculty.html/{a?}/{b?}','home\teacherinfoController@faculty');
//筛选
Route::get('/facultyp/{y?}.html','home\teacherinfoController@facultyp');
Route::get('/screening/{x?}.html','home\teacherinfoController@ss');

//更多金牌 专职 学员 教师
Route::get('/facultys.html/gd/{id?}','home\teacherinfoController@facultys');
//热门学科 大学 区域
Route::get('/hot.html/{type?}/{key?}','home\teacherinfoController@hot');
//导航搜索
Route::get('/navigation.html/{type?}/{key?}','home\teacherinfoController@hot');
//内页搜索
Route::post('/dokey','home\teacherinfoController@dokey');
//资费说明
Route::get('/zfsm.html','home\zfsmController@index');
//学员详细资料
Route::get('/xsinfo{id?}.html','home\xsinfoController@index');
//教员预约
Route::get('/Teacheryy.html/{orderid?}','home\TeacheryyController@index');
//联系我们
Route::get('/contact.html','home\flootsController@contact');
//公司简介
Route::get('/company.html','home\flootsController@company');
//版权声明
Route::get('/copyright.html','home\flootsController@copyright');
//支付方式
Route::get('/payment_way.html','home\flootsController@payment_way');
//支付方式
Route::get('/faculty_sfbz.html','home\flootsController@faculty_sfbz');
//教员中心案例
Route::post('/docase','home\teacherinfoController@docase');






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
    //区
    Route::post('/qu','admin\AdminController@qu');
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
    //订单
    Route::get('/xsdd','admin\orderController@xsdd');
    //修改订单
    Route::post('/doorder','admin\orderController@index');
    //修改订单基础
    Route::post('/orderjc','admin\orderController@orderjc');
    //修改用户联系方式
    Route::post('/orderxgyh','admin\orderController@orderxgyh');
    //修改订单要求
    Route::post('/orderyy','admin\orderController@orderyy');
    //修改订单状态
    Route::post('/orderzt','admin\orderController@orderzt');
    //虚拟学员
    Route::get('/xnxy','admin\xnController@xnxy');
    //虚拟教员
    Route::get('/xnjy','admin\xnController@xnjy');
    //发布订单
    Route::get('/fbdd','admin\fbddController@index');
    //出来发布订单
    Route::post('/fbdddo','admin\fbddController@formdo');
    //热门    大学
    Route::get('/hot_school/{m?}','admin\hotController@school');
    //热门    区域
    Route::any('/hot_area/{m?}','admin\hotController@area');
    //处理热门区域
    Route::get('/do_hot_area/{id?}/{zt?}','admin\hotController@do_hot_area');
    //处理热门大学
    Route::get('/do_hot_school/{id?}/{zt?}','admin\hotController@do_hot_school');
});
//----------后台END----------//
