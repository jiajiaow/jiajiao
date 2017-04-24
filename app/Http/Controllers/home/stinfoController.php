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
                 //->where('o.user_id',$user->u_id)
                ->where('r.ht_t_status','7')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //授课中
            $skz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                // ->where('o.user_id',$user->u_id)
                ->where('r.ht_t_status','8')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //授课结束
            $skjs = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                // ->where('o.user_id',$user->u_id)
                ->where('r.ht_t_status','9')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //试课未成功
            $skwcg = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                //->where('o.user_id',$user->u_id)
                ->where('r.ht_t_status','10')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            //安排中的订单
            $apdd = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r','r.oid','=','o.id')
                ->join('jjw_teachers as t','t.id','=','r.tc_id')
                ->where('o.city_id',session('regionid'))
                //->where('o.user_id',$user->u_id)
                ->where('o.user_id',$user->u_id)
                ->where('r.ht_t_status','1')
                ->select('o.*','t.tc_name','t.tc_school','t.id as tc_id')
                ->paginate(2);
            // dd($apdd);
            return view('delijiajiao.xy_order',['user'=>$user,'dsk'=>$dsk,'skz'=>$skz,'skjs'=>$skjs,'skwcg'=>$skwcg,'apdd'=>$apdd]);
        }else{
            echo "栗志家教学员个人中心 <a href='/outlogin.html'>退出</a>";
        }
    }

    //
    public function stinfo2(){
    	echo "德栗家教学员个人中心 <a href='/outlogin.html'>退出</a>";
    }
}
