<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
        public function actionIndex()
    {
        
        
            $conn = \Yii::$app->db;
        $sql='select * from com_type';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
        return $this->render('index',['data'=>$data]);
        
    }

}
