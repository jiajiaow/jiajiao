<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class fbddController extends Controller
{
    public function index()
    {
        return view('admin.fbdd');
    }
    public function formdo(Request $request)
    {
        $all = $request->all();
	//dd($all);
        $per = $request->input('chi').','.$request->input('shi');
        $all = $request->except('provice','_token');
                //拼接每周上课的具体时间段
        $sk_times = $request->input('sk_times1').$request->input('sk_times2').$request->input('sk_times3').$request->input('sk_times4').$request->input('sk_times5').$request->input('sk_times6').$request->input('sk_times7').$request->input('sk_times8').$request->input('sk_times9').$request->input('sk_times10').$request->input('sk_times11').$request->input('sk_times12').$request->input('sk_times13').$request->input('sk_times14').$request->input('sk_times15').$request->input('sk_times16').$request->input('sk_times17').$request->input('sk_times18').$request->input('sk_times19').$request->input('sk_times20').$request->input('sk_times21').$request->input('sk_times22');

        $input = $request->except(['_token','provice','oid','fdlx','chi','shi','sk_times1','sk_times2','sk_times3','sk_times4','sk_times5','sk_times6','sk_times7','sk_times8','sk_times9','sk_times10','sk_times11','sk_times12','sk_times13','sk_times14','sk_times15','sk_times16','sk_times17','sk_times18','sk_times19','sk_times20','sk_times21','sk_times22']);
        $input['o_ts2'] = $request->input('o_ts');
        $input['o_xs2'] = $request->input('o_xs');
        $input['per_week'] = ',';
        $input['sk_times'] = $sk_times;
        $input['time'] = time();
        $input['status'] = '0';
         //$input['money2'] = $request->input('money');
        //dd($input);
        //$re = DB::table('jjw_order')->where('id',$oid)->update($input);
        $data = DB::table('jjw_order')->insert($input);
        return redirect('/admin/xsdd');
    }
}
