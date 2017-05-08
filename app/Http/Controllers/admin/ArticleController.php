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
        $re = DB::table('jjw_navigation')->insert($all);
        if($re){
            return back();
        }else{
            return back();
        }
    }
    //文章列表
    public function wzdhlb(Request $request)
    {
        $data = DB::table('jjw_navigation')->orderBy('dh_status','desc')->get();
        return view('admin.wzdhlb',['data' => $data]);
    }
    //修改文章导航处理
    public function xgdhdo(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $data = $request->except('_token');
        DB::table('jjw_navigation')->where('dh_id',$data['dh_id'])->update($data);
        return back();
    }

    //发布文章
    public function fbwz()
    {
        $data = DB::table('jjw_navigation')->orderBy('dh_status','desc')->get();
        return view('admin.fbwz',['data' => $data]);
    }
    public function tjwzdo(Request $request)
    {
        if($request->input('ar_title') == null){
            return back()->with('zt','请输入标题');
        }else if($request->input('ar_time') == null){
            return back()->with('zt','请输入时间');
        }else if($request->input('ar_pid') == null){
            return back()->with('zt','请选择分类');
        }else if($request->input('ar_jj') == null){
            return back()->with('zt','请输入简介');
        }else if($request->input('ar_content') == null){
            return back()->with('zt','请输入文章内容');
        }
        $data = $request->all();
        $data = $request->except('_token');
        $re = DB::table('jjw_articlelist')->insert($data);
        if($re){
            return redirect('/admin/wzlb');
        }else{
            return back();
        }
    }
    public function wzlb(Request $request)
    {
        $data = DB::table('jjw_articlelist')
                    ->join('jjw_navigation', 'jjw_articlelist.ar_pid', '=', 'jjw_navigation.dh_id')
                    ->select('jjw_articlelist.*', 'jjw_navigation.dh_Navigationbar')
                    ->orderBy('ar_time','desc')
                    ->orderBy('ar_status','desc')
                    ->get();
                    //dd($data);
        return view('admin.wzlb',['data' => $data]);
    }
    public function wzde($id)
    {
        $re = DB::table('jjw_articlelist')->where('ar_id',$id)->delete();
        return back();
    }
    public function modify($id)
    {
        $re = DB::table('jjw_articlelist')->where('ar_id',$id)->first();
        $data = DB::table('jjw_navigation')->orderBy('dh_status','desc')->get();
        return view('admin.wzxg',['re' => $re,'data' => $data]);
    }
    public function wzxgdo(Request $request)
    {
        if($request->input('ar_title') == null){
            return back()->with('zt','请输入标题');
        }else if($request->input('ar_time') == null){
            return back()->with('zt','请输入时间');
        }else if($request->input('ar_pid') == null){
            return back()->with('zt','请选择分类');
        }else if($request->input('ar_jj') == null){
            return back()->with('zt','请输入简介');
        }else if($request->input('ar_content') == null){
            return back()->with('zt','请输入文章内容');
        }
        $data = $request->all();
        $data = $request->except('_token');
        DB::table('jjw_articlelist')->where('ar_id',$data['ar_id'])->update($data);
        return back();
    }
}
