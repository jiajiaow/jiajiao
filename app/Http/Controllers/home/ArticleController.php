<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ArticleController extends Controller
{
    public function Articlecenter()
    {
        $data = DB::table('jjw_Navigation')->orderBy('dh_status','desc')->get();
        //dd($data);
        return view('delijiajiao.Article',['data' => $data,'list' => null]);
    }
    public function wzlist(Request $request,$id)
    {
        $data = DB::table('jjw_Navigation')->orderBy('dh_status','desc')->get();
        //dd($data);
        $list = DB::table('jjw_Articlelist')->where('ar_pid',$id)->orderBy('ar_status','desc')->paginate(10);
        //dd($list);
        $num = $list->lastPage();
        $nextpage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 1;
        $shipage = $num - $list->currentPage() == 0 ? $num : $list->currentPage() + 10;
        $lastpage = $list->currentPage() - 1 < 0 ? 1 : $list->currentPage() - 1;
        $list->next = $nextpage; $list->last = $lastpage; $list->shi = $shipage;$list->num = $num;$list->dqy = $list->currentPage();
        return view('delijiajiao.Article',['data' => $data,'list' => $list]);
    }
    public function Articlecontent($id)
    {
        $data = DB::table('jjw_Articlelist')->where('ar_id',$id)->first();
        return view('delijiajiao.Articlecontent',['data' => $data]);
    }
}
