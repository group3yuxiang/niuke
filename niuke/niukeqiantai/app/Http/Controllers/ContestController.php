<?php

namespace App\Http\Controllers;
use App\Contest;
use App\Tiji;
use App\Exam;
//use db;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;


/*----------------------------------------
* 
* @试题模块
* 
* author yuxiang
* 	
*-----------------------------------------
*/
class ContestController extends Controller {

	/*
	*	公司真题页面
	*/
	public function contestroom(){
		
		$data = Contest::latest()->orderBy('sort')->get()->toarray();
		//print_r($arr);die;
		$tiji = Tiji::latest()->orderBy('time')->get()->toarray();

		foreach($tiji as $k=>$v){

			$tiji[$k]['num'] = Exam::latest()->where("tijiid",$v['_id'])->count();			
		}
		return view("contest/contestroom")->with('type',$data)->with('tiji',$tiji);
	}

	/*
	*	公司真题信息
	*/
	public function getIncontest(){

		$id = Input::get('id');

		$tiji = Tiji::latest()->where("_id",$id)->first()->toarray();

		$num = Exam::latest()->where("tijiid",$id)->count();
		
		return view("contest/incontest")->with('tiji',$tiji)->with('num',$num);
	}

	/*
	*	公司真题答题页
	*/	
	public function getDoexam(){
		
		$jid = Input::get('jid');

		$allnum = Exam::latest()->where("tijiid",$jid)->count();

		$data = Exam::latest()->where("tijiid",$jid)->get()->toarray();
		
		if($num = Input::get('num')){

			foreach($data as $k=>$v){
				
				if( Input::get('next')){
					if($k+1 == $num+1){

						$exam = $v;
						$exam['count'] = $k+1;
					}
				}else{
					if($k+1 == $num){

						$exam = $v;
						$exam['count'] = $k+1;
					}
				}
			}

		}else{

			$exam = $data[0];
			$exam['count'] = 1;
		}
		
		//print_r($exam);die;
					
		$exam['xuanxiang'] = json_decode($exam['xuanxiang']);

		foreach($exam['xuanxiang'] as $k=>$v){

			if($v == null){

				unset($exam['xuanxiang'][$k]);
			}
		}
		//var_dump($exam['xuanxiang']);die;
		return view("contest/doexam")->with('page',$data)->with('exam',$exam)->with('num',$allnum)->with('jid',$jid);
	}

}
?>