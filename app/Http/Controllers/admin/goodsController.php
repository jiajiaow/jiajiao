<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Storage;
class goodsController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.tjsp');
    }
    public function tjspdo(Request $request)
    {
        if ($request->hasFile('gs_img')) {
            if ($request->isMethod('post')) {
                $file = $request->file('gs_img');
                //dd($file);
                // 文件是否上传成功
                if ($file->isValid()){
                  // 获取文件相关信息
                    $originalName = $file->getClientOriginalName(); // 文件原名
                    $ext = $file->getClientOriginalExtension();     // 扩展名
                    $realPath = $file->getRealPath();   //临时文件的绝对路径
                    $type = $file->getClientMimeType();     // image/jpeg
                    // 上传文件
                    $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                    //dd($filename);
                    // 使用我们新建的uploads本地存储空间（目录）
                    $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                    //DB::table('jjw_goods')->where('city_id',$request->input('id'))->update(['gs_img' => '/uploads/admin/'.$filename]);
                    $all = $request->all();
                    $all = $request->except('_token','gs_img');
                    $all['gs_img'] = "/uploads/admin/".$filename;
                    $re = DB::table('jjw_goods')->insert($all);
                    if($re){
                        return redirect('/admin/goodslist');
                    }else{
                        return bakc();
                    }
                }
            }
        }
    }
    //商品列表
    public function goodslist(Request $request)
    {
        $data = DB::table('jjw_goods')->get();
        return view('admin.goodslist',['data' => $data]);
    }
    //修改状态
    public function goodszt1(Request $request,$id)
    {
        DB::table('jjw_goods')->where('gs_id',$id)->update(['gs_status' => '1']);
        return back();
    }
    //修改状态
    public function goodszt2(Request $request,$id)
    {
        DB::table('jjw_goods')->where('gs_id',$id)->update(['gs_status' => '0']);
        return back();
    }
    public function goodsbj(Request $request,$id)
    {
        $data = DB::table('jjw_goods')->where('gs_id',$id)->first();
        return view('admin.goodsbj',['data' => $data]);
    }
    public function goodsbjdo(Request $request)
    {
        if ($request->hasFile('gs_img')) {
            if ($request->isMethod('post')) {
                $file = $request->file('gs_img');
                //dd($file);
                // 文件是否上传成功
                if ($file->isValid()){
                  // 获取文件相关信息
                    $originalName = $file->getClientOriginalName(); // 文件原名
                    $ext = $file->getClientOriginalExtension();     // 扩展名
                    $realPath = $file->getRealPath();   //临时文件的绝对路径
                    $type = $file->getClientMimeType();     // image/jpeg
                    // 上传文件
                    $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                    //dd($filename);
                    // 使用我们新建的uploads本地存储空间（目录）
                    $bool = Storage::disk('uploads')->put($filename, file_get_contents($realPath));
                    DB::table('jjw_goods')->where('gs_id',$request->input('gs_id'))->update(['gs_img' => '/uploads/admin/'.$filename]);
                }
            }
        }
        $all = $request->all();
        $all = $request->except('_token','gs_img','gs_id');
        $re = DB::table('jjw_goods')->where('gs_id',$request->input('gs_id'))->update($all);
        if($re){
            return redirect('/admin/goodslist');
        }else{
            return bakc();
        }
    }
}
