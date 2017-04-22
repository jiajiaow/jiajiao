<?php
namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class flootsController extends Controller
{
    //联系我们
    public function contact(){
        return view('delijiajiao.contact');
    }
    //公司简介
    public function company(){
        return view('delijiajiao.company');
    }
    //版权声明
    public function copyright(){
        return view('delijiajiao.copyright');
    }
    //支付方式
    public function payment_way(){
        return view('delijiajiao.payment_way');
    }
    //教员收费标准
    public function faculty_sfbz(){
        return view('delijiajiao.faculty_sfbz');
    }
    //预约订单
    public function yydd(){
        return view('delijiajiao.yydd');
    }
}
