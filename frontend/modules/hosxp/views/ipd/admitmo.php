<?php

use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use miloschuman\highcharts\Highcharts;
use yii\helpers\Html;

$datas = $dataProvider->getModels();
?>
<div class="ipd-admitmo">
<div class="well">
        <div class="pull-left">
            <a class="btn  btn-primary"
               href="<?= Url::to(['ipd/index']) ?>">
                <i class="glyphicon glyphicon-chevron-left"> ย้อนกลับ</i>
            </a>
        </div>
<?php
$form = ActiveForm::begin(['method'=>'get',
    'action'=> Url::to(['ipd/admitmo'])]);
?>
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3">  
    จากวันที่:
<?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date1',
            'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?> 
        <br/>
        ถึงวันที่:
    <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date2',
            'value' => $date2,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?> 

    </div>
    <br>
        
    <div class="col-xs-2 col-sm-2 col-md-2">
        <button class='btn btn-danger'>ประมวลผล</button>   
    </div>
        </div>
</div>


<?php ActiveForm::end() ?>
</div>


<?php echo kartik\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'hover'=>true,
    'striped'=>false,
    'panel'=>[
        'type'=> GridView::TYPE_PRIMARY,
        'heading'=>'report'
    ],
    'toolbar'=>[
        '{export}'
    ],
    'columns'=>[
        [
            'attribute'=>'mo',
            'header'=>'เดือน'
        ],
        [
            'attribute'=>'total',
            'header'=>'จำนวน',
            'format'=>'raw',
            'value'=> function($model)use($date1,$date2) {
                   return Html::a(Html::encode($model['total']), [
                   'ipd/subadmitmo', 
                       'mo'=>$model['mo'],
                       'date1'=>$date1,
                       'date2'=>$date2,

                       ],
                           [
                               'target'=>'_bank'
                           ]
                    );
               },
        ]
    ]
]);?>
<?php
        echo Highcharts::widget([
            'options' => [
                'title' => ['text' => 'จำนวนผู้ป่วย IPD แยกรายเดือน'],
                'xAxis' => [
                    'categories' => $mo
                ],
                'yAxis' => [
                    'title' => ['text' => 'จำนวน(คน)']
                ],
                'series' => [
                    [
                        'type' => 'column',
                        'name' => 'เดือน',
                        'data' => $total,
                    ]
                ]
            ]
        ]);
        ?>


</div>