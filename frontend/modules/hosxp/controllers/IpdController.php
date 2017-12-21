<?php


namespace frontend\modules\hosxp\controllers;
use yii;
use yii\data\ArrayDataProvider;

use yii\web\Controller;

/**
 * Default controller for the `hosxp` module
 */
class IpdController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    
    
    public function actionIndex(){
        
        
        return $this->render('index');
    }
    
    
    public function actionAdmitmo($date1=null,$date2=null){
        
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("
        select DATE_FORMAT(a.dchdate,'%m') as mo,COUNT(a.an) as total 
            from an_stat a
            where a.dchdate between '$date1' and '$date2'
            group by DATE_FORMAT(a.dchdate,'%m')
            ")->queryAll();
        
        for($i=0;$i<sizeof($data);$i++){
            
            $mo[] = $data[$i]['mo'];
            $total[] = $data[$i]['total']*1;
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$data           
        ]);
       return $this->render('admitmo',[
            'dataProvider'=>$dataProvider,             
            'sql'=>$sql,
            'date1'=>$date1,
            'date2'=>$date2,
            'mo'=>$mo,
            'total'=>$total
            
        ]);
    }
    public function actionSubadmitmo($mo=null,$date1=null,$date2=null){
        $sql = "select a.an,a.hn
                from an_stat a
                where a.dchdate between '$date1' and '$date2'
                and DATE_FORMAT(a.dchdate,'%m')='$mo'
            ";
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$rawData           
        ]);
       return $this->render('subadmitmo',[
            'dataProvider'=>$dataProvider, 
            'sql'=>$sql,
            'mo'=>$mo,
            'date1'=>$date1,
            'date2'=>$date2,
            
        ]);
    }
}
