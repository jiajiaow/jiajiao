<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class yqljController extends Controller
{
    public function yqlj()
    {
        $data = DB::table('jjw_link')->get();
        $data->toArray();
        //dd($data);
        return json_encode($data);
    }
}
