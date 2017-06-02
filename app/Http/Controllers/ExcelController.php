<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Excel;

class ExcelController extends Controller
{
    public function export(){
        $data = DB::table('jjw_order as order')
            ->join('jjw_position_city', 'jjw_position_city.city_id', '=', 'order.city_id')
            ->where('user_reboot','1')
            ->where('xin_data','110')
            ->select('order.*','jjw_position_city.fz_jzxxf','jjw_position_city.city_name','jjw_position_city.fz_vip','jjw_position_city.fz_qyjyfy','jjw_position_city.bfb1','jjw_position_city.bfb2','jjw_position_city.bfb3','jjw_position_city.bfb4','jjw_position_city.bfb5','jjw_position_city.bfb6','jjw_position_city.bfb7')
            ->orderBy('id','desc')
            ->get()
            ->toArray();
            //$a1 = array('订单编号','用户编号','姓名','手机号','','地区','性别','区','不清楚','年级','上课时间','教师编号','科目','学生情况','订单时间','不知道','是否支付','支付订单编号','城市','是否真','没用的','详细地址','是否大学生','是否专业辅导','qq','wx','文理科','浏览数','预约数','订单状态','不清楚','不清楚','不清楚','安排情况','来源','后台状态','订单备注','上课天','上课小时');
            $cellData = array();
            //$cellData[] = $a1;
        foreach($data as $k => $v){
            $arr[] = "{$v->id}";
            $arr[] = "{$v->user_id}";
            $arr[] = "{$v->user_name}";
            $arr[] = "{$v->user_phone}";
            $arr[] = "{$v->user_byphone}";
            $arr[] = "{$v->user_qq}";
            $arr[] = "{$v->user_sex}";
            $arr[] = "{$v->dq}";
            $arr[] = "{$v->contact}";
            $arr[] = "{$v->grade}";
            $arr[] = "{$v->sk_times}";
            $arr[] = "{$v->explain}";
            $arr[] = "{$v->subject_id}";
            $arr[] = "{$v->user_situation}";
            $arr[] = "{$v->teacher_id}";
            $arr[] = "{$v->teacher_sex}";
            $arr[] = "{$v->teacher_info}";
            $arr[] = "{$v->money}";
            $arr[] = date('Y-m-d H:i:s',$v->time);
            $arr[] = "{$v->region}";
            $arr[] = "{$v->status}";
            $arr[] = "{$v->pay}";
            $arr[] = "{$v->pay_id}";
            $arr[] = "{$v->wx_pay}";
            $arr[] = "{$v->wx_pay_id}";
            $arr[] = "{$v->city_name}";
            $arr[] = "{$v->user_reboot}";
            $arr[] = "{$v->per_week}";
            $arr[] = "{$v->xx_dz}";
            $arr[] = "{$v->ls_type}";
            $arr[] = "{$v->tc_Signing}";
            $arr[] = "{$v->qq}";
            $arr[] = "{$v->wx}";
            $arr[] = "{$v->wlk}";
            $arr[] = "{$v->browsenu}";
            $arr[] = "{$v->yynum}";
            $arr[] = "{$v->ddzt}";
            $arr[] = "{$v->jqzt}";
            $arr[] = "{$v->wzly}";
            $arr[] = "{$v->khly}";
            $arr[] = "{$v->ap}";
            $arr[] = "{$v->yhbz}";
            $arr[] = "{$v->ht_status}";
            $arr[] = "{$v->ddbz}";
            $arr[] = "{$v->o_ts}";
            $arr[] = "{$v->o_xs}";
            $arr[] = "{$v->fdlx}";
            $arr[] = "{$v->o_yue}";
            $arr[] = "{$v->jy_qz}";
            $arr[] = "{$v->xy_qz}";
            $arr[] = "{$v->money2}";
            $arr[] = "{$v->bj_msg_A}";
            $arr[] = "{$v->hetong_time}";
            $arr[] = "{$v->sks_time}";
            $arr[] = "{$v->sks_add}";
            $cellData[] = $arr;
            unset($arr);
        }
        $time = date('Y年m月d日 H:i:s',time());
        Excel::create("{$time}订单",function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->export('xls');
    }
}
