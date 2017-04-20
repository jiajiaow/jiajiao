<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class stinfoController extends Controller
{
	//栗志
    public function stinfo(){
    	echo "栗志家教学员个人中心";
    }

    //德栗
    public function stinfo2(){
    	echo "德栗家教学员个人中心 <a href='/outlogin.html'>退出</a>";
    }
}
