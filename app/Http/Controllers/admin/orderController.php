<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Flc\Alidayu\Client;
use Flc\Alidayu\App;
use Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;
class orderController extends Controller
{
    public function xsdd(Request $request)
    {
        //DB::table('jjw_order')->where('user_id','2020')->update(['user_id' => '']);
        //学员 1是真 0是虚拟的
        $data = DB::table('jjw_order as order')
            ->join('jjw_position_city', 'jjw_position_city.city_id', '=', 'order.city_id')
            ->where('user_reboot','1')
            ->where('xin_data','110')
            ->select('order.*','jjw_position_city.fz_jzxxf','jjw_position_city.city_name','jjw_position_city.fz_vip','jjw_position_city.fz_qyjyfy','jjw_position_city.bfb1','jjw_position_city.bfb2','jjw_position_city.bfb3','jjw_position_city.bfb4','jjw_position_city.bfb5','jjw_position_city.bfb6','jjw_position_city.bfb7')
            ->orderBy('id','desc')
            ->orderBy('time','desc')
            ->paginate(500);
        $num = DB::table('jjw_order')->where('status','3')->count();
        return view('admin.order',['data' => $data,'num' => $num]);
    }
    //订单基础修改
    public function orderjc(Request $request)
    {
        $id = $request->input('id');
        $all = $request->all();
        $all = $request->except('_token');
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
    //订单用户修改
    public function orderxgyh(Request $request)
    {
        //dd($request->all());
        //$u_id = $request->input('u_id');
        $o_id = $request->input('id');
        // $phone = $request->input('user_phone1');
        // $phone2 = $request->input('user_phone2');
        // $phone3 = $request->input('user_phone3');
        // DB::table('jjw_user')->where('u_id',$u_id)->update(['phone' => $phone,'phone2' => $phone2,'phone3' => $phone3]);
        //$all = $request->all();
        $all = $request->except('_token');
        //dd($all,$o_id);
        DB::table('jjw_order')->where('id',$o_id)->update($all);
        //dd($a);
        return back();
    }
    //修改订单要求
    public function orderyy(Request $request)
    {
        $id = $request->input('id');
        $all = $request->all();
        $all = $request->except('_token');
        $all['o_ts2'] = $request->input('o_ts');
        $all['o_xs2'] = $request->input('o_xs');
        $all['money2'] = $request->input('money');
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
    //预约人数
    public function orderyyrs(Request $request,$oid)
    {
        $data = DB::table('jjw_reorder')
                    ->join('jjw_teachers','jjw_reorder.tc_id','=','jjw_teachers.id')
                    ->select('jjw_reorder.*','jjw_teachers.*')
                    ->where('oid',$oid)
                    ->get();
                    //dd($data);
        return view('admin.orderyyrs',['data' => $data]);
    }
    //选择教员
    public function orderxzjy(Request $request,$id)
    {
        return $id;
    }
    //修改教员订单状态
    public function orderxgjyzt(Request $request)
    {
        $oid = $request->input('oid');
        $tc_id = $request->input('tc_id');
        $ht_t_status = $request->input('ht_t_status');
        //dd($tc_id,$oid,$ht_t_status);
        if($ht_t_status == '7'){//试课中
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '4']);
            //后台订单状态
            DB::table('jjw_order')->where('id',$oid)->update(['ht_status' => '2']);
            //修改前台订单订单显示
            DB::table('jjw_order')->where('id',$oid)->update(['status' => '1']);
        }else if($ht_t_status == '8'){//已成功(授课中)
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '6']);
            //后台订单状态
            DB::table('jjw_order')->where('id',$oid)->update(['ht_status' => '3']);
            //修改前台订单订单显示
            DB::table('jjw_order')->where('id',$oid)->update(['status' => '2']);
        }else if($ht_t_status == '9'){//已成功(结束授课)
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '7']);
            //后台订单状态
            DB::table('jjw_order')->where('id',$oid)->update(['ht_status' => '4']);
            //修改前台订单订单显示
            DB::table('jjw_order')->where('id',$oid)->update(['status' => '2']);
        }else if($ht_t_status == '10'){//试课失败
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '8']);
            //后台订单状态
            DB::table('jjw_order')->where('id',$oid)->update(['ht_status' => '8']);
            //修改前台订单订单状态
            DB::table('jjw_order')->where('id',$oid)->update(['status' => '2']);
        }else if($ht_t_status == '1'){//已预约
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '1']);

        }else if($ht_t_status == '4'){//取消预约
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '3']);

        }else if($ht_t_status == '5'){//已确认
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '1']);

        }else if($ht_t_status == '3'){//已审核
            //教员审核短信
            $config = [
                'app_key'    => '23779228',
                'app_secret' => '9d9788c22c9a4dbc8522fae7b97b15ae',
            ];
            $client = new Client(new App($config));
            $req    = new AlibabaAliqinFcSmsNumSend;
            $req->setRecNum($_POST['tc_phone'])
                ->setSmsParam(['oid' => "$oid"])
                ->setSmsFreeSignName('大鱼测试')
                ->setSmsTemplateCode('SMS_67295549');
            $resp = $client->execute($req);
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态 <!-- 不清楚修改什么 -->
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '1']);

        }else if($ht_t_status == '6'){// 部分合适
            //修改选择的状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['ht_t_status' => $ht_t_status]);
            //修改前台教员状态
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['qt_t_status' => '1']);
        }
        return back();
    }
    //修改订单状态
    public function orderzt(Request $request)
    {
        //订单id
        $oid = $request->input('id');
        //后台状态码
        $ht_status = $request->input('ht_status');
        //教员id
        $tc_id = $request->input('teacher_id');
        if($ht_status == '2'){
            //前台显示 已安排
            DB::table('jjw_order')->where('id',$oid)->update(['stastus' => '1']);
            //修改教员个人中心订单 试课中
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '6']);
        }else if($th_status == '3'){
            //前台显示 已完成
            DB::table('jjw_order')->where('id',$oid)->update(['stastus' => '2']);
            //修改教员个人中心订单 已成功(授课中)
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '7']);
        }else if($th_status == '4'){
            //修改教员个人中心订单 已成功(授课结束)
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$tc_id)->update(['stastus' => '8']);
        }else if($th_status == '5'){
            //待审核
            //修改教员个人中心订单 已成功(授课结束)
            DB::table('jjw_order')->where('id',$oid)->update(['th_status' => '5']);
        }else if($th_status == '5'){
            //待审核
            //修改教员个人中心订单 已成功(授课结束)
            DB::table('jjw_order')->where('id',$oid)->update(['th_status' => '5']);
        }else if($th_status == '6'){
            //待退款
            DB::table('jjw_order')->where('id',$oid)->update(['th_status' => '6']);
        }else if($th_status == '7'){
            //关闭生成新单
            DB::table('jjw_reorder')->where('oid',$oid)->where('tc_id',$th_status)->update(['stastus' => '10']);
        }
        DB::table('jjw_order')->where('id',$id)->update($all);
        return back();
    }
    public function xgddzt($id,$zt)
    {
        DB::table('jjw_order')->where('id',$id)->update(['status' => $zt]);
        return back();
    }

    //证件【身份证，学生证是否存在】
    public function zj($id){
        if($id == '1'){
            echo "该教员没有上传身份证!";die;
        }else{
            echo "该教员没有上传学生证!";die;
        }
    }
}
