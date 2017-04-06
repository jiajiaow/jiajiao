<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use iscms\Alisms\SendsmsPusher as Sms;

class YzController extends Controller
{
    public function __construct(Sms $sms)
    {
        $this->sms=$sms;
    }

    public function index()
    {
        $result=$this->sms->send("17600199751","季枫","{'code':'1234'}",'SMS_35975005');
        echo "11111aaaaaaaaaaaaaaaaa";
    }
}
