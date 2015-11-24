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
use app\models\Zhibo;
/**
 * Course controller
 */
class ZhiboController extends MessageController
{
	

	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}
	}

        /* 
         * 直播课程后台展示 
         */
	public function actionIndex(){
            $query = Zhibo::find();//直播类查询
            $pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
            ]);
            //分页
            $row = $query
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
            //print_r($pagination);die;
            
            //返回数据到前台页面
            return $this->renderPartial('index',[
                'data'=>$row,
                'pagination' => $pagination
                ]);
	}
        /* 
         * 直播课程后台删除操作 
         */
        public function  actionDel(){
            //echo  $_GET['id'];
            //删除
            Zhibo::deleteAll(['_id'=>$_GET['id']]);
            return $this->redirect(['/zhibo/index']);
        }
        /* 
         * 直播课程后台添加展示 
         */
        public function actionTianjia(){
            return $this->renderPartial('tianjia');
        }
        /* 
         * 直播课程后台添加操作 
         */
        public function actionAdd(){
            //实例化zhibo
            $mod = new zhibo;
            //接收值
            $mod->title = $_POST['title'];
            $mod->data = $_POST['data'];
            $mod->timestart = $_POST['timestart'];
            $mod->timeend = $_POST['timeend'];
            //判断是否添加
            if($mod->insert()){
                echo $this->success('添加成功','index.php?r=zhibo/index');
            }
        }
}