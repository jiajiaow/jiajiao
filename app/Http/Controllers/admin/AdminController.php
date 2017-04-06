<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;
class AdminController extends Controller
{
    //
    public function index(Request $request){
        return view('admin.index');
    }

    public function indexi(Request $request){
        return view('admin.indexi');
    }
}
