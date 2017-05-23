<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use \DB;

class LoginController extends Controller
{
    //登录
    public function login(Request $request){
        $name  = $request->input('name');
        $pass = $request->input('password');
        $list = \DB::table('jjw_admin')->where('name',$name)->where('password',$pass)->first();
        if($list != null){
            //设置session
            session(['user_id' => $list->id,'name' => $list->name,'admin_id'=>$list->authority]);
            //重定向
            return redirect('/admin/好好学习天天向上');
        }else{
            $errmsg = '账号不存在或密码错误,请重新输入!';
            //重定向
            return redirect('/admin/好好学习天天上wEa3358acQ')->with('errmsg',$errmsg);
        }
//        dd($list);
    }

    //退出登录
    public function out(){
        session()->forget("name");
        session()->forget("user_id");
        session()->forget("admin_id");
        return redirect('/admin/好好学习天天上wEa3358acQ')->with('errmsg','已退出登录!');
    }
}
