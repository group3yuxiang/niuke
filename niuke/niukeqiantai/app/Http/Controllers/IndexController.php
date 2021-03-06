<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mongodb;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
		return view('index.indexlogin');
    }
    
    /*
     * 公司真题
     */
    public function zhenti(){
        return view('index.zhenti');
    }
    
    /*
     * 排行榜
     */
	public function ranking(){

        $user = new Mongodb;
        $loginlist = $user->select(['username','nickname','login_count'])->take(5)->orderBy('login_count','desc')->get()->toarray();
        $fenlist = $user->select(['username','nickname','fensi'])->take(5)->orderBy('fensi','desc')->get()->toarray();
        $money = $user->select(['username','nickname','money'])->take(5)->orderBy('money','desc')->get()->toarray();
        return view('index.paihang')->with(array('login_sort'=>$loginlist,'fensi'=>$fenlist,'money'=>$money));
    }


    /*
        *专项练习
    */

    public function zhuanxiang(){
        return view("contest.intelligenttest");
    }

    /*
        *精华专题
    */

    public function jinhua(){
        return view("contest.topics");
    }

    /*
        *在线编程
    */

    public function biancheng(){
        return view("contest.oj");
    }

    /*
        *试题广场
    */

    public function shiti(){
        return view('contest.questioncenter');
    }

    /*
        *精品试题
    */

    public function jingpin(){
        return view("contest.jingpin");
    }

    /*
        *直播课程
    */
    public function zhibo(){
        return view("contest.zhibo");
    }


}
