<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class fbddController extends Controller
{
    public function index()
    {
        return '表单';
    }
    public function formdo()
    {
        return '处理表单';
    }
}
