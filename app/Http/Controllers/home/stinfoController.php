<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class stinfoController extends Controller
{
	//栗志
    public function stinfo(){
        //1为德栗
        if (session('Template') == '2') {
            $user = \DB::table('jjw_user')->where('city_id',session('regionid'))->where('phone',session('st_phone'))->first();
            //dd($user);
            return view('delijiajiao.xy_info',['user'=>$user]);
        }else{
            echo "栗志家教学员个人中心 <a href='/outlogin.html'>退出</a>";
        }
    }
    //学员订单
    public function xy_order(){
        if (session('Template') == '2') {
            if(session('st_phone') == ''){
                return redirect('/')->with('msg','请您先登录!');
            }
            $user = \DB::table('jjw_user')->where('city_id',session('regionid'))->where('phone',session('st_phone'))->first();
            // dd($user);
            //待试课
            // $dsk = \DB::table('jjw_order')->where('city_id',session('regionid'))->where('user_id',$user->u_id)->where('status','1')->paginate(2);
            $dsk = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                 ->where('o.user_id',$user->u_id)
                ->where('r.qt_t_status','4')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //dd($dsk);
            //授课中
            $skz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                ->where('o.user_id',$user->u_id)
                ->where('r.qt_t_status','6')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //授课结束
            $skjs = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                ->where('o.user_id',$user->u_id)
                ->where('r.qt_t_status','7')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //试课未成功
            $skwcg = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                ->where('o.user_id',$user->u_id)
                ->where('r.qt_t_status','8')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //安排中的订单
            $apdd = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                ->where('o.user_id',$user->u_id)
                ->where('r.qt_t_status','1')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
             //dd($apdd);
            return view('delijiajiao.xy_order',['user'=>$user,'dsk'=>$dsk,'skz'=>$skz,'skjs'=>$skjs,'skwcg'=>$skwcg,'apdd'=>$apdd]);
        }else{
            echo "栗志家教学员个人中心 <a href='/outlogin.html'>退出</a>";
        }
    }

    public function st_financial(){
        if (session('Template') == '2') {
            //$user = \DB::table('jjw_user')->where('city_id',session('regionid'))->where('phone',session('st_phone'))->first();
            return view('delijiajiao.xy_financial');
           // return view('delijiajiao.xy_financial',['user'=>$user]);
        }else{
           echo "栗志";
        }
    }

    //学员合同
    public function xy_hetong($id){
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.id',$id)
            ->select('o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','t.tc_phone','t.tc_name','r.jd_times','t.id as t_id','tc_school','tc_type')
            ->first();
        return view('delijiajiao.xy_hetong',['list'=>$list]);
    }

    public function doxy_hetong(){

        //$list = DB::table('jjw_order')->where('id',$_POST['id'])->get();
        $list = \DB::table('jjw_order as o')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.id',$_POST['id'])
            ->select('o.*','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','r.xxf','r.xxf2','r.jd_times','t.id as t_id')
            ->first();
        //dd($list);
        //需要补需要退
        $a = $list->money*$list->o_xs-($list->xxf+$list->xxf2);
        if($a == '0'){
            \DB::table('jjw_reorder')->where('oid',$_POST['id'])->where('tc_id',$list->t_id)->update(['qt_t_status'=>'6','ht_t_status'=>'8',]);
            \DB::table('jjw_order')->where('id',$_POST['id'])->update(['xy_qz'=>'1']);
            return redirect('/xy_order.html');
        }

    }
}
