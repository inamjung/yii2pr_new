<?php

namespace frontend\modules\repair\controllers;


use frontend\modules\repair\models\LineBot;
use frontend\modules\repair\models\Repairs;
use yii\helpers\Url;

class LinebotController extends \yii\web\Controller {

    public function actionCurl() 
       {
        $last_thread = LineBot::findOne(['name' => 'แจ้งซ่อม']);
        $thread = Repairs::find()->orderBy(['id' => SORT_DESC])->one();
        if (!$last_thread) {
            $last_thread = new LineBot;
            $last_thread->name = 'แจ้งซ่อม';
            $last_thread->last_id = $thread->id;
            $last_thread->save();
//http://www.sriwilaihos.go.th/swlgroup/web/index.php?r=repairs%2Fview&id=1360
            $message = $thread->problem ;
            $res = $this->notify_message($message);
        } else {
            if ($last_thread->last_id != $thread->id) {
                $message = $thread->problem;
                $res = $this->notify_message($message);
                $last_thread->last_id = $thread->id;
                $last_thread->save();
                
            return $this->redirect(['/repair/repairs/index']);
            }
        }
    }

    public function notify_message($message) {
        $line_api = 'https://notify-api.line.me/api/notify';
        $line_token = ''; // ใส่ token line
        $queryData = array('message' => $message);
        $queryData = http_build_query($queryData, '', '&');
        $headerOptions = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Authorization: Bearer " . $line_token . "\r\n"
                . "Content-Length: " . strlen($queryData) . "\r\n",
                'content' => $queryData
            )
        );
        $context = stream_context_create($headerOptions);
        $result = file_get_contents($line_api, FALSE, $context);
        $res = json_decode($result);
        return $res;
    }
    

}

