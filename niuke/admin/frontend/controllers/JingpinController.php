<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\mongodb\Query;
use frontend\controllers\MessageController;
use yii\data\Pagination;
use app\models\Jingpin;

/**
 * Course controller
 */
header("content-type:text/html;charset=utf-8");
class JingpinController extends MessageController
{
	

	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}
	}

        /* 
         * 精品课程后台展示 
         */
	public function actionIndex(){
            
            $query = Jingpin::find();//精品类查询
                //ar_dump($query);die;
		$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
		]);
		
		$row = $query
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();//分页
		//print_r($row);die;
                
                //返回数据到后台展示页面
		return $this->renderPartial('index', [
				'data'   => $row,
				'pagination' => $pagination,
		]);
           
	}
         /* 
          * 精品课程后台添加页面展示 
          */
        public function actionTianjia(){
            return $this->renderPartial('tianjia');
            
        }
         /* 
          * 精品课程后台展示添加操作 
          */
        public function actionAdd(){
               //print_r($_POST); 
               $mod = new jingpin;//实例化精品类
               //接收值
               $mod->j_name = $_POST['j_name'];
               $mod->videos = $_POST['videos'];
               $mod->practice = $_POST['practice'];
               $mod->desc = $_POST['desc'];
               //是否添加成功
               if($mod->insert()){
                   
                   echo $this->success("添加成功","index.php?r=jingpin/index",'1');
               }
        }
         /* 
          * 精品课程后台删除操作 
          */
        public function actionDel(){
                 //删除
                 Jingpin::deleteAll(['_id'=>$_GET['id']]);
                 return $this->redirect(['/jingpin/index']);
        }
}