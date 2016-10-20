<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller {

    public function actionIndex() {
        $conn = \Yii::$app->db;
        $sql = 'SELECT c.brand,s.* from com_service s
        left join com c on c.com_id=s.com_id';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
        //print_r($data);
         return $this->render('index',['data'=>$data]);
    }

}
