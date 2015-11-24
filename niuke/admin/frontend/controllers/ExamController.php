<?php

/*
                   _ooOoo_
                  o8888888o
                  88" . "88
                  (| -_- |)
                  O\  =  /O
               ____/`---'\____
             .'  \\|     |//  `.
            /  \\|||  :  |||//  \
           /  _||||| -:- |||||-  \
           |   | \\\  -  /// |   |
           | \_|  ''\---/''  |   |
           \  .-\__  `-`  ___/-. /
         ___`. .'  /--.--\  `. . __
      ."" '<  `.___\_<|>_/___.'  >'"".
     | | :  `- \`.;`\ _ /`;.`/ - ` : | |
     \  \ `-.   \_ __\ /__ _/   .-` /  /
======`-.____`-.___\_____/___.-`____.-'======
                   `=---='
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
         佛祖保佑       永无BUG
*/

namespace frontend\controllers;

use Yii;
use app\Models\exam;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\mongodb\Query;
use frontend\controllers\MessageController;
use yii\data\Pagination;
use app\models\Tiji;

use app\models\PracticeSort;

/**
 * ExamController implements the CRUD actions for exam model.
 */
class ExamController extends MessageController
{
    /*
        *显示添加试题页面
    */
    public function actionIndex(){
        return $this->renderPartial('exam_list');
    }

    /*
        *添加试题
    */

    public function actionAddexam(){

        $practice = PracticeSort::find()->where(['pid'=>'0'])->all();
        $practice_info = PracticeSort::find()->all();
        $tiji_info = Tiji::find()->all();
        return $this->renderPartial("exam_add",['practice'=>$practice,'practice_info'=>$practice_info,'tiji'=>$tiji_info]);
    }

    /*
        *添加题目入库
    */
    public function actionAdd(){
        $time = time();
        $xuanxiang = json_encode(explode('#',$_POST['xuanxiang']));
        $mod = new exam;
        $mod->timu          = $_POST['timu'];
        $mod->xuanxiang     = $xuanxiang;
        $mod->question      = $_POST['question'];
        $mod->labal         = $_POST['labal'];
        $mod->tijiid        = $_POST['tijiid'];
        $mod->time          = $time;
        $mod->ishot         = $_POST['ishot'];
        if($mod->insert()){
            echo $this->success("添加成功","index.php?r=exam/addexam",'1');
        }
    }
}


