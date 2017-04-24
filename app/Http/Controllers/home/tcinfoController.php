<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tcinfoController extends Controller
{

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
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
            //未选中
            $wxz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '2')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
            //已取消
            $yqx = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '3')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
            //试课中
            $skz = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '4')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
            //试课结束
            $sskjs = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '8')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
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
            //授课结束
            $skjs = \DB::table('jjw_order as o')
                ->join('jjw_reorder as r', 'r.oid', '=', 'o.id')
                ->join('jjw_teachers as t', 't.id', '=', 'r.tc_id')
                ->where('o.city_id', session('regionid'))
                ->where('r.tc_id', session('tc_id'))
                ->where('r.qt_t_status', '7')
                ->select('o.*', 't.tc_name', 't.tc_school', 't.id as tc_id')
                ->paginate(2);
            //$apdd =  \DB::table('jjw_reorder')->where('ht_t_status','1')->paginate(5);
            // dd($sskz);
            return view('delijiajiao.tc_order', ['list' => $list, 'yap' => $yap, 'wxz' => $wxz, 'yqx' => $yqx, 'skz' => $skz, 'sskjs' => $sskjs, 'sskz' => $sskz, 'skjs' => $skjs]);
        } else {
            echo "栗志";
        }
    }
}
