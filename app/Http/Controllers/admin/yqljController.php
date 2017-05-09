<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \DB;
use Storage;
class yqljController extends Controller
{
    public function tjyqlj()
    {
        return view('admin.tjyqlj');
    }
    public function tjyqljdo(Request $request)
    {
        $data = $request->all();
        if($data['link_name'] == null){
            return back()->with('zt','请输入标题');
        }else if($data['link_a'] == null){
            return back()->with('zt','请输入链接');
        }
        $data = $request->except('_token');
        DB::table('jjw_link')->insert($data);
        return redirect('/admin/yqljlb');
    }
    public function yqljlb()
    {
        $data = DB::table('jjw_link')->get();
        return view('admin.yqljlb',['data' => $data]);
    }
    //删除
    public function yqljsc($id)
    {
        DB::table('jjw_link')->where('id',$id)->delete();
        return back();
    }
    //编辑
    public function bjyqlj($id)
    {
        $data = DB::table('jjw_link')->where('id',$id)->first();
        return view('admin.bjyqlj',['data' => $data]);
    }
    public function bjyqljdo(Request $request)
    {
        $data1 = $request->all();
        //dd($data1);
        if($data1['link_name'] == null){
            return back()->with('zt','请输入标题');
        }else if($data1['link_a'] == null){
            return back()->with('zt','请输入链接');
        }
        $data = $request->except('_token','id');
        DB::table('jjw_link')->where('id',$data1['id'])->update($data);
        return redirect('/admin/yqljlb');
    }
}
