<?php
/**
 * Created by PhpStorm.
 * User: Ming
 * Date: 2018/11/19
 * Time: 9:13
 */

namespace app\controllers;

use yii;
use yii\web\Controller;
use app\models\News;
use yii\data\Pagination;

class NewsController extends Controller
{
    public  $enableCsrfValidation = false;


    public function actionList(){
        if (yii::$app->request->isPost){
            $so = yii::$app->request->post('so');
            $data = News::find()->asArray()->all();
            $count = count($data);
            $pages = new Pagination(['totalCount' => $count,'pagesize' => 2]);
            $models = News::find()
                ->offset($pages->offset)
                ->asArray()
                ->limit($pages->limit)
                ->all();
            return $this->render('list',['data' => $models,'pages' => $pages]);
        }else{
            $data = News::find()->asArray()->all();
            $count = count($data);
            $pages = new Pagination(['totalCount' => $count,'pagesize' => 2]);
            $models = News::find()
                ->offset($pages->offset)
                ->asArray()
                ->limit($pages->limit)
                ->all();
            return $this->render('list',['data' => $models,'pages' => $pages]);
        }
    }

    public function actionDel(){
        $id = yii::$app->request->post('id');
        $sql = 'delete * from news where id= $id';
        $res = yii::$app->createcommand($sql)->exec;
        if ($res){
            return 1;
        }else{
            return 2;
        }
    }
}