<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class htjykController extends Controller
{
    public function index()
    {
        $list = \DB::table('jjw_teachers')->paginate(10);
        dd($list);
        return view('admin.htjyk',['data' => $list]);
    }
}
