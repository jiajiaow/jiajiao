<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ArticleController extends Controller
{
    //添加文章导航
    public function index()
    {
        return view('admin.tjwzdh');
    }
    //处理添加文章导航
    public function tjwzdhdo(Request $request)
    {
        $all = $request->all();
        $all = $request->except('_token');
        $re = DB::table('jjw_Navigation')->insert($all);
        if($re){
            return back();
        }else{
            return back();
        }
    }
    //文章列表
    public function wzdhlb(Request $request)
    {
        $data = DB::table('jjw_Navigation')->orderBy('dh_status','desc')->get();
        return view('admin.wzdhlb',['data' => $data]);
    }
    //修改文章导航处理
    public function xgdhdo(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $data = $request->except('_token');
        DB::table('jjw_Navigation')->where('dh_id',$data['dh_id'])->update($data);
        return back();
    }

    //发布文章
    public function fbwz()
    {
        $data = DB::table('jjw_Navigation')->orderBy('dh_status','desc')->get();
        return view('admin.fbwz',['data' => $data]);
    }
    public function tjwzdo(Request $request)
    {
        $data = $request->all();
        $data = $request->except('_token');
        DB::table('jjw_Articlelist')->insert($data);
        return back();
    }
}
