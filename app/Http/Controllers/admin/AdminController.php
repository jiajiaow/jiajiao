<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \DB;
use Storage;
class AdminController extends Controller
{
    //
    public function index(Request $request){
	dd($_SERVER);
	return view('admin.index');
    }

    public function indexi(Request $request){
        return view('admin.indexi');
    }
    //分站列表
    public function fzlb(Request $request)
    {
            $list = DB::table('jjw_position_city')->where('state','!=','0')->get();
            return view('admin.fzlb',['list'=>$list]);
    }
    //添加分站视图
    public function tjfz()
    {
        $re = DB::table('jjw_position_provice')->get();
        return view('admin.tjfz',['re' => $re]);
    }
    //执行添加分站
    public function dotjfz(Request $request)
    {
        //dd($request->all());
        //判断是否是空,
        if($_POST == null) {
            return back()->with('msg', '请不要上传空内容!');
        }else if($request->input('prefix') == null){
            return back()->with('msg', '前缀不能为空!');
        }else if($request->input('phone') == null){
            return back()->with('msg', '联系电话不能为空!');
        }else if($request->input('title') == null){
            return back()->with('msg', '标题不能为空!');
        }else if($request->input('city') == null){
            return back()->with('msg', '省市级别不能为空!');
        }
        if ($request->isMethod('post')) {
            $file = $request->file('fz_wx');
            $file1 = $request->file('fz_qq');
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
                // 获取文件相关信息
                $originalName = $file1->getClientOriginalName(); // 文件原名
                $ext1 = $file1->getClientOriginalExtension();     // 扩展名
                $realPath1 = $file1->getRealPath();   //临时文件的绝对路径
                $type = $file1->getClientMimeType();     // image/jpeg
                // 上传文件
                $filename1 = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
                //dd($filename);
                // 使用我们新建的uploads本地存储空间（目录）
                $bool1 = Storage::disk('uploads')->put($filename1, file_get_contents($realPath1));
                //dd($bool,$bool1);
            }
        }
        //获取数据
        $stu = $request->all();
        //dd($stu);
        $stu = $request->except('fz_wx','fz_qq','_token','provice','city');
        //写入数据库
        $list = \DB::table('jjw_position_city')->where('city_id',$request->input('city'))->update($stu);
        DB::table('jjw_position_city')->where('city_id',$request->input('city'))->update(['fz_wx' => '/uploads/admin/'.$filename,'fz_qq' => '/uploads/admin/'.$filename1]);
        //dd($list);
        if($list){
            return redirect('/admin/fzlb');
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
    //区
    public function qu(Request $reuqest){
        $cid = $_POST['cid'];
        $list = \DB::table('jjw_position_county')->where('city_id',$cid)->get();
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

        //判断是否是空,
        if ($_POST == null) {
            return back()->with('msg', '请不要上传空内容!');
        } else if ($request->input('prefix') == null) {
            return back()->with('msg', '前缀不能为空!');
        } else if  ($request->input('title') == null) {
            return back()->with('msg', '标题不能为空!');
        } else if ($request->input('city') == null) {
            return back()->with('msg', '省市级别不能为空!');
        } else if ($request->input('phone') == null) {
            return back()->with('msg', '联系人不能为空!');
        }
            // 获取数据
            $stu = [
                'title' => $request->input('title'),
                'prefix' => $request->input('prefix'),
                'state' => $request->input('state'),
                'phone' => $request->input('phone'),
            ];
            //写入数据库
            $list = \DB::table('jjw_position_city')->where('id', $request->input('id'))->update($stu);
            if($list){
                return redirect('/admin/fzlb');
            }
    }
    //分站启用
    public function fzqy(Request $request,$id)
    {
        \DB::table('jjw_position_city')->where('id',$id)->update(['state' => '1']);
        return redirect('/admin/fzlb');
    }
    //分站停用
    public function fzty(Request $request,$id)
    {
        \DB::table('jjw_position_city')->where('id',$id)->update(['state' => '2']);
        return redirect('/admin/fzlb');
    }
    //分站删除
    public function fzlb_del(Request $request){
        $stu = [
            'title' => NULL,
            'prefix' => NULL,
            'state' => '0',
            'phone' => NULL,
        ];
        $list = \DB::table('jjw_position_city')->where('id', $_POST['id'])->update($stu);
        if($list){
            return "y";
        }
    }
}
