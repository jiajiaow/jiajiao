<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class tcinfoController extends Controller
{
    //学员详情
    public function tc_page(){
        $list = \DB::table('jjw_order')->where('city_id', session('regionid'))->where('status', '0')->orderBy('id', 'desc')->paginate(5);
        $num = $list->lastPage();
        $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
        $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
        $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
        $list->next = $nextpage; $list->last = $lastpage;$list->shi = $shipage;$list->num = $num; $list->dqy = $list->currentPage();
       //dd($list);
        return view('delijiajiao.tc_page',['list'=>$list]);
    }
    //我预约的单之安排中
    public function tc_order1(){
        if (session('tc_phone') == null) {
            return redirect('/login.html')->with('msg', '请您先登录!');
        }
        //安排中
        $yap = \DB::table('jjw_order as o')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.city_id', session('regionid'))
            ->where('r.tc_id', session('tc_id'))
            ->where('r.qt_t_status', '1')
            ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->paginate(2);
        //dd($yap);
            $num = $yap->lastPage();
            $nextpage = $num - $yap->currentPage() == 0 ? $num : $yap->currentPage() + 1;
            $shipage = $num - $yap->currentPage() == 0 ? $num : $yap->currentPage() + 10;
            $lastpage = $yap->currentPage() - 1 < 0 ? 1 : $yap->currentPage() - 1;
            $yap->next = $nextpage; $yap->last = $lastpage; $yap->shi = $shipage;$yap->num = $num;$yap->dqy = $yap->currentPage();
        return view('delijiajiao.tc_order1',['yap'=>$yap]);
    }

    //未选中
    public function tc_order2(){
        //未选中
        $wxz = \DB::table('jjw_order as o')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.city_id', session('regionid'))
            ->where('r.tc_id', session('tc_id'))
            ->where('r.qt_t_status', '2')
            ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->paginate(2);
        $num = $wxz->lastPage();
        $nextpage = $num - $wxz->currentPage() == 0 ? $num : $wxz->currentPage() + 1;
        $shipage = $num - $wxz->currentPage() == 0 ? $num : $wxz->currentPage() + 10;
        $lastpage = $wxz->currentPage() - 1 < 0 ? 1 : $wxz->currentPage() - 1;
        $wxz->next = $nextpage; $wxz->last = $lastpage; $wxz->shi = $shipage;$wxz->num = $num;
        return view('delijiajiao.tc_order2',['wxz'=>$wxz]);
    }
    //取消预约
    public function tc_order3(){
        //已取消
        $yqx = \DB::table('jjw_order as o')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.city_id', session('regionid'))
            ->where('r.tc_id', session('tc_id'))
            ->where('r.qt_t_status', '3')
            ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->paginate(2);
        $num = $yqx->lastPage();
        $nextpage = $num - $yqx->currentPage() == 0 ? $num : $yqx->currentPage() + 1;
        $shipage = $num - $yqx->currentPage() == 0 ? $num : $yqx->currentPage() + 10;
        $lastpage = $yqx->currentPage() - 1 < 0 ? 1 : $yqx->currentPage() - 1;
        $yqx->next = $nextpage; $yqx->last = $lastpage; $yqx->shi = $shipage;$yqx->num = $num;
        return view('delijiajiao.tc_order3',['yqx'=>$yqx]);
    }

    public function tc_order4(){
        //试课中
        $skz = \DB::table('jjw_order as o')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.city_id', session('regionid'))
            ->where('r.tc_id', session('tc_id'))
            ->where('r.qt_t_status', '4')
            ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.jd_times','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->paginate(2);
        $num = $skz->lastPage();
        $nextpage = $num - $skz->currentPage() == 0 ? $num : $skz->currentPage() + 1;
        $shipage = $num - $skz->currentPage() == 0 ? $num : $skz->currentPage() + 10;
        $lastpage = $skz->currentPage() - 1 < 0 ? 1 : $skz->currentPage() - 1;
        $skz->next = $nextpage; $skz->last = $lastpage; $skz->shi = $shipage;$skz->num = $num;
        //dd($skz);
        return view('delijiajiao.tc_order4',['skz'=>$skz]);
    }
    public function tc_order5(){
        //试课结束
        $sskjs = \DB::table('jjw_order as o')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.city_id', session('regionid'))
            ->where('r.tc_id', session('tc_id'))
            ->where('r.qt_t_status', '8')
            ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->paginate(2);
        $num = $sskjs->lastPage();
        $nextpage = $num - $sskjs->currentPage() == 0 ? $num : $sskjs->currentPage() + 1;
        $shipage = $num - $sskjs->currentPage() == 0 ? $num : $sskjs->currentPage() + 10;
        $lastpage = $sskjs->currentPage() - 1 < 0 ? 1 : $sskjs->currentPage() - 1;
        $sskjs->next = $nextpage; $sskjs->last = $lastpage; $sskjs->shi = $shipage;$sskjs->num = $num;
        return view('delijiajiao.tc_order5',['sskjs'=>$sskjs]);
    }
    public function tc_order6(){
        //授课中
            $sskz = \DB::table('jjw_order as o')
                ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '6')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
                ->paginate(2);
                $num = $sskz->lastPage();
                $nextpage = $num - $sskz->currentPage() == 0 ? $num : $sskz->currentPage() + 1;
                $shipage = $num - $sskz->currentPage() == 0 ? $num : $sskz->currentPage() + 10;
                $lastpage = $sskz->currentPage() - 1 < 0 ? 1 : $sskz->currentPage() - 1;
                $sskz->next = $nextpage; $sskz->last = $lastpage; $sskz->shi = $shipage;$sskz->num = $num;
         return view('delijiajiao.tc_order6',['sskz'=>$sskz]);
    }
    public function tc_order7(){
        //授课结束
        $skjs = \DB::table('jjw_order as o')
            ->join('jjw_position_city as pc', 'pc.city_id', '=', 'o.city_id')
            ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
            ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
            ->where('o.city_id', session('regionid'))
            ->where('r.tc_id', session('tc_id'))
            ->where('r.qt_t_status', '7')
            ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status','r.id as rid','r.add as radd','pc.fz_jzxxf','pc.city_name','pc.fz_vip','pc.fz_qyjyfy','pc.bfb1','pc.bfb2','pc.bfb3','pc.bfb4','pc.bfb5','pc.bfb6','pc.bfb7')
            ->paginate(2);
        $num = $skjs->lastPage();
        $nextpage = $num - $skjs->currentPage() == 0 ? $num : $skjs->currentPage() + 1;
        $shipage = $num - $skjs->currentPage() == 0 ? $num : $skjs->currentPage() + 10;
        $lastpage = $skjs->currentPage() - 1 < 0 ? 1 : $skjs->currentPage() - 1;
        $skjs->next = $nextpage; $skjs->last = $lastpage; $skjs->shi = $shipage;$skjs->num = $num;
        return view('delijiajiao.tc_order7',['skjs'=>$skjs]);
    }
    //教员订单
    public function tc_order(){
        if (session('Template') == '2') {
            if (session('tc_phone') == '') {
                return redirect('/')->with('msg', '请您先登录!');
            }
            $list = \DB::table('jjw_order')->where('city_id', session('regionid'))->where('status', '0')->orderBy('id', 'desc')->paginate(5);
            $num = $list->lastPage();
            $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
            $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
            $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
            $list->next = $nextpage;
            $list->last = $lastpage;
            $list->shi = $shipage;
            //安排中
            $yap = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '1')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt','r.ht_t_status')
                ->paginate(2);
                $num = $yap->lastPage();
                $nextpage = $num - $yap->currentPage() == 0 ? $num : $yap->currentPage() + 1;
                $shipage = $num - $yap->currentPage() == 0 ? $num : $yap->currentPage() + 10;
                $lastpage = $yap->currentPage() - 1 < 0 ? 1 : $yap->currentPage() - 1;
                $yap->next = $nextpage; $yap->last = $lastpage; $yap->shi = $shipage;$yap->num = $num;
           // dd($yap);
            //未选中
            $wxz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '2')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt')
                ->paginate(2);
                $num = $wxz->lastPage();
                $nextpage = $num - $wxz->currentPage() == 0 ? $num : $wxz->currentPage() + 1;
                $shipage = $num - $wxz->currentPage() == 0 ? $num : $wxz->currentPage() + 10;
                $lastpage = $wxz->currentPage() - 1 < 0 ? 1 : $wxz->currentPage() - 1;
                $wxz->next = $nextpage; $wxz->last = $lastpage; $wxz->shi = $shipage;$wxz->num = $num;
            //已取消
            $yqx = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '3')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id','r.yy_zt')
                ->paginate(2);
                $num = $yqx->lastPage();
                $nextpage = $num - $yqx->currentPage() == 0 ? $num : $yqx->currentPage() + 1;
                $shipage = $num - $yqx->currentPage() == 0 ? $num : $yqx->currentPage() + 10;
                $lastpage = $yqx->currentPage() - 1 < 0 ? 1 : $yqx->currentPage() - 1;
                $yqx->next = $nextpage; $yqx->last = $lastpage; $yqx->shi = $shipage;$yqx->num = $num;
            //dd($yqx);
            //试课中
            $skz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '4')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
                $num = $skz->lastPage();
                $nextpage = $num - $skz->currentPage() == 0 ? $num : $skz->currentPage() + 1;
                $shipage = $num - $skz->currentPage() == 0 ? $num : $skz->currentPage() + 10;
                $lastpage = $skz->currentPage() - 1 < 0 ? 1 : $skz->currentPage() - 1;
                $skz->next = $nextpage; $skz->last = $lastpage; $skz->shi = $shipage;$skz->num = $num;
            //试课结束
            $sskjs = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '8')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
                $num = $sskjs->lastPage();
                $nextpage = $num - $sskjs->currentPage() == 0 ? $num : $sskjs->currentPage() + 1;
                $shipage = $num - $sskjs->currentPage() == 0 ? $num : $sskjs->currentPage() + 10;
                $lastpage = $sskjs->currentPage() - 1 < 0 ? 1 : $sskjs->currentPage() - 1;
                $sskjs->next = $nextpage; $sskjs->last = $lastpage; $sskjs->shi = $shipage;$sskjs->num = $num;
            //dd($skjs);
            //授课中
            $sskz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '6')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
                $num = $sskz->lastPage();
                $nextpage = $num - $sskz->currentPage() == 0 ? $num : $sskz->currentPage() + 1;
                $shipage = $num - $sskz->currentPage() == 0 ? $num : $sskz->currentPage() + 10;
                $lastpage = $sskz->currentPage() - 1 < 0 ? 1 : $sskz->currentPage() - 1;
                $sskz->next = $nextpage; $sskz->last = $lastpage; $sskz->shi = $shipage;$sskz->num = $num;
           // dd($sskz);
            //授课结束
            $skjs = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '7')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
                $num = $skjs->lastPage();
                $nextpage = $num - $skjs->currentPage() == 0 ? $num : $skjs->currentPage() + 1;
                $shipage = $num - $skjs->currentPage() == 0 ? $num : $skjs->currentPage() + 10;
                $lastpage = $skjs->currentPage() - 1 < 0 ? 1 : $skjs->currentPage() - 1;
                $skjs->next = $nextpage; $skjs->last = $lastpage; $skjs->shi = $shipage;$skjs->num = $num;
            //$apdd =  \DB::table('jjw_reorder')->where('ht_t_status','1')->paginate(5);
            //dd($skjs);
            return view('delijiajiao.tc_order', ['list' => $list, 'yap' => $yap, 'wxz' => $wxz, 'yqx' => $yqx, 'skz' => $skz, 'sskjs' => $sskjs, 'sskz' => $sskz, 'skjs' => $skjs]);
        } else {
            echo "栗志";
        }
    }

    //教员取消订单
    public function tc_qxorder(){
       // dd($_POST);
        $list = DB::table('jjw_reorder')->where('oid',$_POST['oid'])->where('tc_id',$_POST['tc_id'])->update(['qt_t_status'=>'3','ht_t_status'=>'4']);
        if($list){
            return back();
        }
    }

    //财务
    public function tc_financial(){
        $list = DB::table('jjw_teachers')->where('id',session('tc_id'))->where('tc_city_id',session('regionid'))->first();
        //dd($list);
        return view('delijiajiao.tc_financial',['list'=>$list]);
    }

    //试课地址
    public function tc_skadd(){
        $list = DB::table('jjw_reorder')->where('id',$_POST['rid'])->where('oid',$_POST['oid'])->where('tc_id',$_POST['tc_id'])->update(['add'=>$_POST['add']]);
        return back();
    }

    //试课成功 与不 成功
    public function tc_skcg(){
       // dd($_POST);
        if($_POST['zt'] =='1'){
            $list = DB::table('jjw_reorder')->where('id',$_POST['rid'])->where('oid',$_POST['oid'])->where('tc_id',$_POST['tc_id'])->update(['qt_t_status'=>'6','ht_t_status'=>'8']);
            return back();
        }else{
            $list = DB::table('jjw_reorder')->where('id',$_POST['rid'])->where('oid',$_POST['oid'])->where('tc_id',$_POST['tc_id'])->update(['qt_t_status'=>'8','ht_t_status'=>'10']);
            return back();
        }
    }

    //结束课程
    public function tc_jskc(){
        $list = DB::table('jjw_reorder')->where('id',$_POST['rid'])->where('oid',$_POST['oid'])->where('tc_id',$_POST['tc_id'])->update(['qt_t_status'=>'7','ht_t_status'=>'9']);
        return back();
    }
}
