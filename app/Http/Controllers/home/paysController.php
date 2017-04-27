<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class paysController extends Controller
{
    public function top_up(){
        return view('delijiajiao.top_up');
    }
}
