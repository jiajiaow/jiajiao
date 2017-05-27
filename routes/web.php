<?php
/**
 |                             _ooOoo_
 |                            o8888888o
 |                            88" . "88
 |                            (| -_- |)
 |                            O\  =  /O
 |                         ____/`---'\____
 |                       .'  \\|     |//  `.
 |                      /  \\|||  :  |||//  \
 |                     /  _||||| -:- |||||-  \
 |                     |   | \\\  -  /// |   |
 |                     | \_|  ''\---/''  |   |
 |                     \  .-\__  `-`  ___/-. /
 |                   ___`. .'  /--.--\  `. . __
 |                ."" '<  `.___\_<|>_/___.'  >'"".
 |               | | :  `- \`.;`\ _ /`;.`/ - ` : | |
 |               \  \ `-.   \_ __\ /__ _/   .-` /  /
 |          ======`-.____`-.___\_____/___.-`____.-'======
 |                             `=---='
 |          ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
 |                     佛祖保佑          永无BUG
 |
 |
 |--------------------------------------------------------------------------
 | Web Routes
 |--------------------------------------------------------------------------
 |
 | This file is where you may define all of the routes that are handled
 | by your application. Just tell Laravel the URIs it should respond
 | to using a Closure or controller method. Build something great!
 |
  **/


//首页
Route::get('/','home\indexController@index');
//地区切换
Route::get('/change_city.html','home\indexController@change');
//地区切换德栗手机
Route::get('/change_citydlsj.html','home\indexController@changedlsj');
//手机入口
Route::get('/mobile','home\indexController@index');
//手机登录
Route::get('/mobile/login','home\indexController@login');
Route::get('/yz','YzController@index');
//登录
Route::get('/login.html',function(){
   // session()->forget("tc_phone");
    //session()->forget("tc_name");
        return view('home.login');
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
//修改密码
Route::post('/doeditpass','home\LoginController@doeditpass');
//教员个人中心
Route::get('/teacherinfo.html','home\teacherinfoController@index');
//处理教员个人中心
Route::post('/doteacherinfo.html','home\teacherinfoController@doteacherinfo');
//用户个人中心 stinfo栗志  stinfo2德栗
Route::get('/stinfo.html','home\stinfoController@stinfo');
//学员订单
Route::get('/xy_order.html','home\stinfoController@xy_order');
//财务中心
Route::get('/xy_financial.html','home\stinfoController@st_financial');
//充值
Route::get('/tc_top_up.html','home\paysController@top_up');
//信息费
Route::post('/xxf.html','home\paysController@xxf');
//诚意金
Route::post('/cyj.html','home\paysController@cyj');

//教员订单
Route::get('/tc_order.html','home\tcinfoController@tc_order');
//财务中心
Route::get('/tc_financial.html','home\tcinfoController@tc_financial');

//教员取消预约
Route::post('/tc_qxorder.html','home\tcinfoController@tc_qxorder');
//试课地址
Route::post('/tc_skadd.html','home\tcinfoController@tc_skadd');
//试课成功 与不成功
Route::post('/tc_skcg.html','home\tcinfoController@tc_skcg');
//结束课程
Route::post('/tc_jskc.html','home\tcinfoController@tc_jskc');
//试课时间
Route::post('/sktimes.html','home\tcinfoController@tc_sktimes');
//申请退款
Route::post('/sqtk.html','home\tcinfoController@tc_sqtk');

//tc_order加元订单详情分页
Route::get('/tc_page.html','home\tcinfoController@tc_page');
//我的预约的单之安排中
Route::get('/tc_order1.html','home\tcinfoController@tc_order1');
//未选中
Route::get('/tc_order2.html','home\tcinfoController@tc_order2');
//取消预约
Route::get('/tc_order3.html','home\tcinfoController@tc_order3');
//试课中
Route::get('/tc_order4.html','home\tcinfoController@tc_order4');
//授课失败
Route::get('/tc_order5.html','home\tcinfoController@tc_order5');
//授课中
Route::get('/tc_order6.html','home\tcinfoController@tc_order6');
//授结束
Route::get('/tc_order7.html','home\tcinfoController@tc_order7');
//教员合同
Route::get('/hetong/{id?}.html','home\tcinfoController@hetong');
Route::post('/dohetong','home\tcinfoController@dohetong');
//后台显示合同
Route::get('/ht_hetong/{id?}.html','home\tcinfoController@ht_hetong');
//订单审核
Route::post('/dosc.html','home\tcinfoController@dosc');
//试课成功的订单
Route::post('/doscs.html','home\tcinfoController@doscs');
//学员合同
Route::get('/xy_hetong/{id?}.html','home\stinfoController@xy_hetong');
//执行
Route::post('/doxy_hetong','home\stinfoController@doxy_hetong');
//教员提现
Route::post('/tc_tixian','home\tcinfoController@tc_tixian');


//省
Route::post('/sheng','home\teacherinfoController@sheng');
//县
Route::post('/xian','home\teacherinfoController@xian');
//当前的区
Route::post('/qu','home\teacherinfoController@qu');
//修改教学授课科目信息
Route::post('/dokemu.html','home\teacherinfoController@dokemu');
//上传身份证
Route::post('/upsfz','home\teacherinfoController@up_sfz_xsz');
Route::post('/upxsz','home\teacherinfoController@up_sfz_xsz');
//生成假数据
Route::get('/jia.html','home\indexController@jia');
//教师详细
Route::get('/teacher/detail/{m?}.html','home\teacherinfoController@teacher');
//学员库
Route::get('/xueyuan.html','home\xueshenController@xueyuan');
//筛选学员库
Route::get('/xueyuans/{y?}.html','home\xueshenController@xueyuans');
//预约老师
Route::get('/yuyuelaoshi.html/{a?}/{b?}/{c?}/{d?}','home\yuyueController@index');
//预约老师
Route::get('/yuyuelaoshis.html','home\yuyueController@index');
//预约验证码
Route::post('/register','home\yuyueController@register');
//查询验证码
Route::post('/registerdo','home\yuyueController@registerdo');
//提交数据
Route::post('/yuyuexiangxi.html','home\yuyueController@doyyform');
//尾部提交
Route::post('/dofloatyyform','home\yuyueController@dofloatyyform');
//弹窗提交新家教
Route::post('/dotanchuangform','home\yuyueController@dotanchuangform');
//填写预约详细
Route::any('/yuyuexxform','home\yuyueController@yuyuexxform');
//提交
Route::post('/StudentAdd','home\yuyueController@StudentAdd');
//测试

Route::get('/test','testController@index');
//预约教员
Route::post('/yuyuejiaoyuan.html','home\yuyueController@yyjy');

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
//搜索教员 学员ID
Route::post('/dosousuoid','home\teacherinfoController@dosousuoid');
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
//教员收费标准
Route::get('/faculty_sfbz.html','home\flootsController@faculty_sfbz');
//预约订单流程
Route::get('/yydd.html','home\flootsController@yydd');
//教员中心案例
Route::post('/docase','home\teacherinfoController@docase');
//wechatpay
Route::post('/wechatpay','payController@wechatpay');
//alipay
Route::post('/alipay','payController@alipay');
//回调
Route::any('/callback','payController@callback');
//支付完成页面
Route::get('/PaymentSuccess','payController@PaymentSuccess');

//微信支付查
Route::post('/wechatpayquery','payController@wechatpayquery');


//文章中心
Route::get('/Articlecenter.html','home\ArticleController@Articlecenter');
//文章列表
Route::get('/Articlecenter{id?}.html','home\ArticleController@wzlist');
//文章内容
Route::get('/Articlecontent{id?}.html','home\ArticleController@Articlecontent');


//退款
Route::post('/refund','home\refundController@index');

//友情链接
Route::any('/yqlj','home\yqljController@yqlj');
//计划任务每5分钟一次
Route::any('/5minutes','TaskController@Fiveminutes');









//----------栗志手机端----------//
Route::group(['prefix' => '/mobile',"middleware"=>"CheckAges"],function(){
    //导航搜索
    Route::get('/navigation.html/{type?}/{key?}','home\teacherinfoController@hot');
    //导航更多
    Route::get('/faculty.html/{a?}/{b?}','home\teacherinfoController@faculty');
    //热门学科 大学 区域
    Route::get('/hot.html/{type?}/{key?}','home\teacherinfoController@hot');
    //文章内容
    Route::get('/Articlecontent{id?}.html','home\ArticleController@Articlecontent');
    //文章列表
    Route::get('/Articlecenter{id?}.html','home\ArticleController@wzlist');
    //学员详细资料
    Route::get('/xsinfo{id?}.html','home\xsinfoController@index');
    //预约老师
    Route::get('/yuyuelaoshi.html/{a?}/{b?}/{c?}/{d?}','home\yuyueController@index');
    //教师注册
    Route::get('/reg.html',function(){return view('phonedl.reg');});
    //登录
    Route::get('/login.html',function(){return view('phonedl.login');});
    //教师详细
    Route::get('/teacher/detail/{m?}.html','home\teacherinfoController@teacher');
    //学员库
    Route::get('/xueyuan.html','home\xueshenController@xueyuan');
    //处理执行教师登录
    Route::post('/dologin.html','home\LoginController@dologin');
    //教员个人中心
    Route::get('/teacherinfo.html','home\teacherinfoController@index');
    //用户个人中心 stinfo栗志  stinfo2德栗
    Route::get('/stinfo.html','home\stinfoController@stinfo');
    //前台退出登录a
    Route::get('/outlogin.html','home\LoginController@outlogin');
    //提交数据
    Route::post('/yuyuexiangxi.html','home\yuyueController@doyyform');
    //填写预约详细
    Route::any('/yuyuexxform','home\yuyueController@yuyuexxform');
    //手机端订单 里的新订单
    Route::get('/tc_page.html','home\tcinfoController@tc_page');
    //我的预约的单之安排中
    Route::get('/tc_order1.html','home\tcinfoController@tc_order1');
//未选中
    Route::get('/tc_order2.html','home\tcinfoController@tc_order2');
//取消预约
    Route::get('/tc_order3.html','home\tcinfoController@tc_order3');
//试课中
    Route::get('/tc_order4.html','home\tcinfoController@tc_order4');
//授课失败
    Route::get('/tc_order5.html','home\tcinfoController@tc_order5');
//授课中
    Route::get('/tc_order6.html','home\tcinfoController@tc_order6');
//授结束
    Route::get('/tc_order7.html','home\tcinfoController@tc_order7');
});
//----------栗志手机端END----------//










//----------  后台  ----------//
//登录视图 方法
Route::get('/admin/backstagesoiunvdfkja387239871',function(){ return view('admin.login');  });
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
    //选择教员
    Route::get('/orderxzjy/{id}','admin\orderController@orderxzjy');
    //修改教员订单状态
    Route::post('/orderxgjyzt','admin\orderController@orderxgjyzt');
    //预约人数
    Route::get('/orderyyrs/{id}','admin\orderController@orderyyrs');
    //虚拟学员
    Route::get('/xnxy','admin\xnController@xnxy');
    //虚拟教员
    Route::get('/xnjy','admin\xnController@xnjy');
    //发布订单
    Route::get('/fbdd','admin\fbddController@index');
    //处理发布订单
    Route::post('/fbdddo','admin\fbddController@formdo');
    //热门    大学
    Route::get('/hot_school/{m?}','admin\hotController@school');
    //热门    区域
    Route::any('/hot_area/{m?}','admin\hotController@area');
    //处理热门区域
    Route::get('/do_hot_area/{id?}/{zt?}','admin\hotController@do_hot_area');
    //处理热门大学
    Route::get('/do_hot_school/{id?}/{zt?}','admin\hotController@do_hot_school');
    //教员库
    Route::any('/htjyk','admin\htjykController@index');
    //添加文章导航
    Route::get('/tjwzdh','admin\ArticleController@index');
    //处理添加文章导航
    Route::post('/tjwzdhdo','admin\ArticleController@tjwzdhdo');
    //文章导航列表
    Route::get('/wzdhlb','admin\ArticleController@wzdhlb');
    //修改文章导航处理
    Route::post('/xgdhdo','admin\ArticleController@xgdhdo');

    //发布文章
    Route::get('/fbwz','admin\ArticleController@fbwz');
    //添加文章DO
    Route::post('/tjwzdo','admin\ArticleController@tjwzdo');
    //文章列表
    Route::get('/wzlb','admin\ArticleController@wzlb');
    //文章删除
    Route::get('/wzde/{id?}','admin\ArticleController@wzde');
    //文章修改
    Route::get('/wzmodify{id?}','admin\ArticleController@modify');
    //文章编辑修改
    Route::post('/wzxgdo','admin\ArticleController@wzxgdo');

    //添加友情链接
    Route::get('/tjyqlj','admin\yqljController@tjyqlj');
    //处理添加友情链接
    Route::post('/tjyqljdo','admin\yqljController@tjyqljdo');
    //友情链接列表
    Route::get('/yqljlb','admin\yqljController@yqljlb');
    //删除友情链接
    Route::get('/yqljsc/{id}','admin\yqljController@yqljsc');
    //编辑
    Route::get('/bjyqlj/{id}','admin\yqljController@bjyqlj');
    //处理编辑
    Route::post('/bjyqljdo','admin\yqljController@bjyqljdo');
    //教员试课不成功订单退款
    Route::get('/skbcg','admin\jytkController@skbcg');
    //提前结束课程
    Route::get('/tqjskc','admin\jytkController@tqjskc');
    //成功减少课酬
    Route::get('/cgjskc','admin\jytkController@cgjskc');
    //诚意金解锁
    Route::get('/cyjjs','admin\jytkController@cyjjs');
    //admin/tdye.html  退款到后台
    Route::post('/tdye.html','admin\jytkController@tdye');
    //添加商品
    Route::get('/tjsp','admin\goodsController@index');
    //商品列表
    Route::get('/goodslist','admin\goodsController@goodslist');
    //处理添加商品
    Route::post('/tjspdo','admin\goodsController@tjspdo');
    //修改商品状态
    Route::get('/goodszt1/{id?}','admin\goodsController@goodszt1');
    //修改商品状态
    Route::get('/goodszt2/{id?}','admin\goodsController@goodszt2');
    //编辑商品
    Route::get('/goodsbj/{id?}','admin\goodsController@goodsbj');
    //处理编辑商品
    Route::post('/goodsbjdo','admin\goodsController@goodsbjdo');
    //教员收支流水
    Route::get('/jyszls','admin\caiwuController@jyszls');
    //订单回收站
    Route::get('/recyclebin','admin\recyclebinController@recyclebin');
    //订单屏蔽
    Route::get('/xgddzt/{id?}/{zt?}','admin\orderController@xgddzt');
    //tc_tixian教员提现记录
    Route::get('/tc_tixian','admin\caiwuController@tc_tixian');
    //金牌教员
    Route::get('/jinpai/{m?}','admin\jinpaiController@jinpai');
    //执行修改金牌
    Route::get('/do_jin_pai/{id?}/{zt?}','admin\jinpaiController@dojinpai');
    //专职教员
    Route::get('/zhuanzhi/{m?}','admin\jinpaiController@zhuanzhi');
    //执行修改专职
    Route::get('/do_zhuan_zhi/{id?}/{zt?}','admin\jinpaiController@dozhuanzhi');
    //学生教员
    Route::get('/xuesheng/{m?}','admin\jinpaiController@xuesheng');
    //执行修改学生教员
    Route::get('/do_xue_sheng/{id?}/{zt?}','admin\jinpaiController@doxuesheng');
    //判断证件
    Route::get('/zj/{id?}','admin\orderController@zj');

});
//----------后台END----------//

