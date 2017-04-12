<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class orderController extends Controller
{
    public function xsdd()
    {
        return view('admin.xsdd');
    }
    public function jsdd()
    {
        return view('admin.jsdd');
    }
}
