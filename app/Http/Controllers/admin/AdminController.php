<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class AdminController extends Controller
{
    //首页左边栏
    public function index(Request $request){
        return view('admin.index');
    }

    //首页右边栏
    public function indexi(Request $request){
        return view('admin.indexi');
    }

}
