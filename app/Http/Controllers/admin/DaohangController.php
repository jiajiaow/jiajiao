<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use \DB;

class DaohangController extends Controller
{
    //导航
    public function daohang(){
        $list =  \DB::table('jjw_yiji')->get();
        $erji =  \DB::table('jjw_erji')->get();
        $sanji =  \DB::table('jjw_sanji')->get();
        return view('admin.daohang',['list'=>$list,'erji'=>$erji,'sanji'=>$sanji]);
    }
    //一级分类
    public function yiji(){
        return view('admin.yiji');
    }
    //执行添加一级分类
    public function doyiji(Request $request){
        if($request->input('name') == null){
           return back()->with('msg', "一级分类不能为空!");
        }

        $list = \DB::table('jjw_yiji')->insert(['yiji'=>$request->input('name')]);
        if($list != null){
            return redirect('/admin/daohang');
        }

    }
    //二级分类
    public function erji(Request $request){
        $list =  \DB::table('jjw_yiji')->get();
        return view('admin.erji',['list'=>$list ]);
    }
    //执行添加二级分类
    public function doerji(Request $request){
        if($request->input('yiji') == '' or $request->input('yiji') == -1){
            return back()->with('msg', "请选择对应一级分类!");
        }else if($request->input('erji') == '' ){
            return back()->with('msg', "二级分类内容不能为空!");
        }
        $list = \DB::table('jjw_erji')->insert(['yiji_id'=>$request->input('yiji'),'erji'=>$request->input('erji')]);
        if($list == null){
                 return back()->with('msg', "请重新添加二级分类!");
        }else{
                return redirect('/admin/daohang');
        }

    }
    //三级分类
    public function sanji(){
        $list =  \DB::table('jjw_erji')->get();
        return view('admin.sanji',['list'=>$list]);
    }
    //执行添加三级分类
    public function dosanji(Request $request){
//        dd($request);
        if($request->input('erji') == '' or $request->input('erji') == -1){
            return back()->with('msg', "请选择对应二级分类!");
        }else if($request->input('sanji') == '' ){
            return back()->with('msg', "三级分类内容不能为空!");
        }
        $list = \DB::table('jjw_sanji')->insert(['erji_id'=>$request->input('erji'),'sanji'=>$request->input('sanji')]);
        if($list == null){
            return back()->with('msg', "请重新添加三级分类!");
        }else{
            return redirect('/admin/daohang');
        }

    }
    //导航删除
    public function dhdel(Request $request){
        // -10是一级分类 -20是二级分类 -30是三级分类
        //判断是否是一级分类
        if($_POST['fl'] == '-10'){
            $erji =  \DB::table('jjw_erji')->where('yiji_id',$_POST['id'])->get();
            if(count($erji) >= '1'){
                return "no";
            }else{
                $list =  \DB::table('jjw_yiji')->where('id',$_POST['id'])->delete();
                return "y";
            }
            //判断是否是二级分类
        }else if($_POST['fl'] == '-20'){
            //查询二级分类下面是否有分类
            $sanji =  \DB::table('jjw_sanji')->where('erji_id',$_POST['id'])->get();
            if(count($sanji) >= '1'){
                return "no";
            }else{
                $list =  \DB::table('jjw_erji')->where('id',$_POST['id'])->delete();
                return "y";
            }
            //echo $_POST['id'];
            //判断是否是三级分类
        }else if($_POST['fl'] == '-30'){
            $list =  \DB::table('jjw_sanji')->where('id',$_POST['id'])->delete();
            if($list){
                return 'y';
            }
        }

    }
    //导航修改
    public function dhedit(Request $request){
        // -10是一级分类 -20是二级分类 -30是三级分类
        //判断是否是一级分类
        if($_GET['fl'] == '-10'){
            $list =  \DB::table('jjw_yiji')->where('id',$_GET['id'])->get();
            return view('admin.dhedit',['list'=>$list]);
            //判断是否是二级分类
        }else if($_GET['fl'] == '-20'){
            $list =  \DB::table('jjw_erji')->where('id',$_GET['id'])->get();
            return view('admin.dhedit2',['list'=>$list]);
            //判断是否是三级分类
        }else if($_GET['fl'] == '-30'){
            $list =  \DB::table('jjw_sanji')->where('id',$_GET['id'])->get();
            return view('admin.dhedit3',['list'=>$list]);
        }
    }
    //执行导航修改
    public function dodhedit(Request $request){
        // -10是一级分类 -20是二级分类 -30是三级分类
        //判断是否是一级分类
        if($_POST['fl'] == '-10'){
            $list = \DB::table('jjw_yiji')->where('id',$_POST['id'])->update(['yiji'=>$_POST['yiji']]);
            if($list){
                echo "修改一级目录成功";
            }
            //判断是否是二级分类
        }else if($_POST['fl'] == '-20'){
            $list = \DB::table('jjw_erji')->where('id',$_POST['id'])->update(['erji'=>$_POST['erji']]);
            if($list){
                echo "修改二级目录成功";
            };
            //判断是否是三级分类
        }else if($_POST['fl'] == '-30'){
            $list = \DB::table('jjw_sanji')->where('id',$_POST['id'])->update(['sanji'=>$_POST['sanji']]);
            if($list){
               echo  "修改三级目录成功";
            }
        }
    }
}
