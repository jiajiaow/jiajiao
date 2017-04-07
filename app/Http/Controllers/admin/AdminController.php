<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class AdminController extends Controller
{
    //
    public function index(Request $request){
        return view('admin.index');
    }

    public function indexi(Request $request){
        return view('admin.indexi');
    }

    public function fzlb(Request $request)
    {

            $list = DB::table('jjw_position_city')->where('state','1')->get();
            return view('admin.fzlb',['list'=>$list]);

    }
    public function tjfz()
    {
        $re = DB::table('jjw_position_provice')->get();
        return view('admin.tjfz',['re' => $re]);
    }
    public function dotjfz(Request $request)
    {
        $file = $request->file('file');
        //判断是否是空,
        if($file == null) {
            return back()->with('msg', '请不要上传空内容!');
        }else if($request->input('prefix') == null){
            return back()->with('msg', '前缀不能为空!');
        }else if($request->input('url') == null){
            return back()->with('msg', 'URL不能为空!');
        }else if($request->input('title') == null){
            return back()->with('msg', '标题不能为空!');
        }else if($request->input('city') == null){
            return back()->with('msg', '省市级别不能为空!');
        }
        if($file->isValid()){
            $ext = $file->getClientOriginalExtension();//获取后缀
            $filename = time().rand(1000,9999).".".$ext;//新文件名
            $file->move("admin/dotjfz_image/",$filename);//移动目录
            $logo = "/admin/dotjfz_image/".$filename;//组成路径
            // 获取数据
            $stu = [
                'title'=>$request->input('title'),
                'url'=>$request->input('url'),
                'prefix'=>$request->input('prefix'),
                'state'=>$request->input('state'),
                'phone'=>$request->input('phone'),
                'logo'=> $logo,
            ];
            //写入数据库
            $list = \DB::table('jjw_position_city')->where('city_id',$request->input('city'))->update($stu);
            if($list){
                return redirect('/admin/fzlb');
            }
        }else{
            return back()->with('msg', '请不要上传空内容!');
        }
    }
    //例子：北京市 湖南省
    public function sheng(Request $request)
    {
        $list =  \DB::table('jjw_position_provice')->get();
        return $list;
    }
    //市辖县
    public function xian(Request $request)
    {
        $pid = $_POST['pid'];
        $list = \DB::table('jjw_position_city')->where('province_id',$pid)->get();
        return $list;
    }

    //编辑分站
    public function bjfz(Request $request){
        $list = \DB::table('jjw_position_city')->where('id',$_GET['id'])->first();
        return view('/admin.bjfz',['list'=>$list]);
    }


    //处理编辑分站
    public function dobjfz(Request $request)
    {
        $file = $request->file('file');
        //判断是否是空,
        if ($file == null) {
            return back()->with('msg', '请不要上传空内容!');
        } else if ($request->input('prefix') == null) {
            return back()->with('msg', '前缀不能为空!');
        } else if ($request->input('url') == null) {
            return back()->with('msg', 'URL不能为空!');
        } else if ($request->input('title') == null) {
            return back()->with('msg', '标题不能为空!');
        } else if ($request->input('city') == null) {
            return back()->with('msg', '省市级别不能为空!');
        }
        if ($file->isValid()) {
            $ext = $file->getClientOriginalExtension();//获取后缀
            $filename = time() . rand(1000, 9999) . "." . $ext;//新文件名
            $file->move("admin/dotjfz_image/", $filename);//移动目录
            $logo = "/admin/dotjfz_image/" . $filename;//组成路径
            // 获取数据
            $stu = [
                'title' => $request->input('title'),
                'url' => $request->input('url'),
                'prefix' => $request->input('prefix'),
                'state' => $request->input('state'),
                'phone' => $request->input('phone'),
                'logo' => $logo,
            ];
            //写入数据库
            $list = \DB::table('jjw_position_city')->where('id', $request->input('id'))->update($stu);
            if($list){
                return redirect('/admin/fzlb');
            }
        }else{
            return back()->with('msg', '请不要上传空内容!');
        }
    }

    //处理分站列表删除
    public function fzlb_del(Request $request){
        $stu = [
            'title' => '',
            'url' => '',
            'prefix' => '',
            'state' => '0',
            'phone' => '',
            'logo' => '',
        ];
        $list = \DB::table('jjw_position_city')->where('id', $_POST['id'])->update($stu);
        if($list){
            return "y";
        }
    }
}
