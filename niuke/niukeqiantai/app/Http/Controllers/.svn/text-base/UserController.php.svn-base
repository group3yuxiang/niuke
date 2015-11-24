<?php


namespace App\Http\Controllers;
use App\Mongodb;
use App\User;
//use db;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Session;



class UserController extends Controller {
    //put your code here


    //未登录首页

    public $timestamps = false;


    public function index(){
        return view("index.index");
        
    }

    //注册页面
    public function register(){
        return view("index.register");
    }

    //登陆页面
    public function login(){
        return view("index.login");
    }

    //注册后的页面，完善资料页面
    public function completeness(){
        $email = Session::get('email');
        return view("index.completeness")->with('email',$email);
    }
    
    //注册信息入库
     public function register_info(){
         $arr['username'] = $_POST['email'];
         $arr['password'] = $_POST['password'];
         
         if($arr['username'] == "" && $arr['password'] == ""){
            echo "<script>alert('用户名和密码不能为空');location.href='http://www.exam.com/laraval/niukeqiantai/public/register'</script>";
         }
         if($arr['username'] == ""){
            echo "<script>alert('用户名不能为空');location.href='http://www.exam.com/laraval/niukeqiantai/public/register'</script>";
         }
         if($arr['password'] == ""){
            echo "<script>alert('密码不能为空');location.href='http://www.exam.com/laraval/niukeqiantai/public/register'</script>";
         }
         $user = Mongodb::where("username",$arr['username'])->get()->toarray();
         if(!empty($user)){
            echo "<script>alert('用户名已存在');location.href='http://www.exam.com/laraval/niukeqiantai/public/register'</script>";

         }else{
             $res = Mongodb::insert($arr);
         
         
             if($res){
                Session::put('email',$arr['username']);
                 echo "<script>alert('注册成功，点击完善资料！');location.href='http://www.exam.com/laraval/niukeqiantai/public/completeness'</script>";
             }else{
                 echo 2;
             }
         }
          
     }


     //完善资料入库
     public function nickname(){
        
        $arr['nickname'] = $_POST['nickname'];
        $arr['images']   = "";
        $res = Mongodb::where("username",$_POST['email'])->update($arr);
        if($res){
            echo "<script>alert('注册成功，点击登陆！');location.href='http://www.exam.com/laraval/niukeqiantai/public/login'</script>";
        }else{
            echo "no";
        }
     }


	 //验证登录
	 public function checklogin(){
		//echo URL::action('UsersController@getLogin');
		$userinfo  = Mongodb::where('username',$_POST['emailtel'])->get()->toarray();
		
		if($userinfo){
			if($userinfo[0]['password'] == $_POST['pwd']){
				$data = array(
					'last_login_time' => time(),
					'login_count' => $userinfo[0]['login_count']+1
				);
				Mongodb::where('username',$_POST['emailtel'])->update($data);
				Session::put('nickname',$userinfo[0]);
				Session::put('uid',$userinfo[0]['_id']);
				return redirect(url('loginindex'));
			}else{
				echo "<script>alert('密码不正确');location.href='".url('login')."';</script>";
			}
		}
	 }

}
