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
use app\models\PracticeSort;
use yii\data\Pagination;

/*----------------------------------------
* 
* @分类管理
* 
* author yuxiang
* 	
*-----------------------------------------
*/
header("content-type:text/html;charset=utf-8");
class TypeController extends MessageController
{

	public function beforeAction($action){

		if(!isset($_SESSION['user_info'])){

			echo $this->error("请登录","index.php?r=public/login",'1');
		}else{
		
			return true;
		}	
	}

	/*
	*	分类列表
	*/	
	public function actionIndex(){

		$query = PracticeSort::find();
        
		$pagination = new Pagination([
				'defaultPageSize' => 5,
				'totalCount' => $query->count(),
		]);
		
		$row = $query
		->offset($pagination->offset)
		->limit($pagination->limit)
		->all();
		
		return $this->renderPartial('index', [
				'data'   => $row,
				'pagination' => $pagination,
		]);

	
	}

	/*
	*	分类添加
	*/
	public function actionAdd(){

		$data = PracticeSort::find()->where(['in','level',['1','2']])->all();
		
		return $this->renderPartial('add',['data'=>$data]);
	}

	/*
	*	分类添加执行
	*/
	public function actionAddact(){

		$mod = new PracticeSort;
		$mod->name = $_POST['name'];
		$mod->pid = $_POST['pid'];
		$mod->level = $_POST['level'];
		
		
		if(@$_POST['display']){

			$mod->display = $_POST['display'];
		}
		
		if($mod->insert()){

			echo $this->success("添加成功","index.php?r=type/add",'1');
		}
	}

	/*
	*	分类删除
	*/
	public function actionDel(){

		PracticeSort::deleteAll(['_id' => $_GET['id']]);

		$this->redirect(['/type/index']);
	}

	/*
	*	分类修改
	*/
	public function actionUpd(){
		
		$data['id'] = $_GET['id'];
		$data['info'] =	PracticeSort::find()->where(['_id'=>$_GET['id']])->all();
		//print_r($data['info'][0]['display']);die;
		$data['type'] = PracticeSort::find()->where(['in','level',['1','2']])->all();
		
		return $this->renderPartial('edit',['data'=>$data]);
	}

	/*
	*	分类修改执行
	*/
	public function actionUpdact(){

		$id = $_POST['id'];
		
		unset($_POST['id']);
		unset($_POST['_csrf']);

		$collection = Yii::$app->mongodb->getCollection('practice_sort');
        $res = $collection->update(['_id'=>$id],$_POST);

		if($res > 0){
			
			echo $this->success("修改成功","index.php?r=type/index",'1');

		}else{

			echo $this->error("修改失败","index.php?r=type/index",'1');
		}

	}

}