<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $conn = \Yii::$app->db;
        $sql = 'SELECT t.com_type_name,COUNT(c.com_id)as cdata from com c
        left join com_type t on t.com_type_id=c.com_type_id
        GROUP BY c.com_type_id';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        

       foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }
//           print_r($chart);
//          die();    
        return $this->render('index',['chart'=>$chart]);
    }

}
