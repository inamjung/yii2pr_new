<?php
use yii\helpers\Url;
use yii\helpers\Html;
return [
    [
        'class' => 'kartik\grid\CheckboxColumn',
        'width' => '20px',
    ],
    [
        'class' => 'kartik\grid\SerialColumn',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
         [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'createDate',
         'format' => 'raw',    
         'value' => function ($model) {
            return Yii::$app->thaiFormatter->asDate($model->createDate, 'php:d/m/Y');
        }    
     ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'department_id',
        'value' => function ($model) {
            return $model->dep->name;
        } 
    ],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'datenotuse',
//    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'tool_id',
        'value' => function ($model) {
            return $model->retool->name;
        } 
    ],
//    [
//        'class'=>'\kartik\grid\DataColumn',
//        'attribute'=>'number',
//    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'problem',
    ],
         [
         'class'=>'\kartik\grid\DataColumn',
         'attribute'=>'satatus',
         'format' => 'raw',    
         'value'=>function($model){
            if($model->satatus == 'รอรับงาน'){
                return '<i class="glyphicon glyphicon-pause" style="color:#d63734"></li> รอรับงาน';
            } else {
                return '<i class="glyphicon glyphicon-ok" style="color:green"></li> รับงานแล้ว';
            }
         }    
     ],        
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'stage',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'startdate',
    // ],

    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'dateplan',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'remark',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'answer',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'enddate',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'user_id',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'confirm',
    // ],
    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'confirm_detail',
    // ],

    // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'updateDate',
    // ],
//    [
//        'class' => 'kartik\grid\ActionColumn',
//        'dropdown' => false,
//        'vAlign'=>'middle',
//        'urlCreator' => function($action, $model, $key, $index) { 
//                return Url::to([$action,'id'=>$key]);
//        },
//        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
//        'updateOptions'=>['role'=>'modal-remote','title'=>'Update', 'data-toggle'=>'tooltip'],
//        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
//                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
//                          'data-request-method'=>'post',
//                          'data-toggle'=>'tooltip',
//                          'data-confirm-title'=>'Are you sure?',
//                          'data-confirm-message'=>'Are you sure want to delete this item'], 
//    ],
[
                'class' => 'kartik\grid\ActionColumn',
                'contentOptions'=>[
                    'noWrap' => true
                  ], 
                'template'=>'<div class="btn-group btn-group-sm" role="group" aria-label="...">{view}{update}</div>',
                'buttons'=>[
                    'view'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-search"></i>',$url,['class'=>'btn btn-default','role'=>'modal-remote','title'=>'ดู']);
                    }, 
                    'update'=>function($url,$model,$key){
                        return Html::a('<i class="glyphicon glyphicon-edit"></i>',['/repair/repairs/updateadmin','id'=>$model->id],['class'=>'btn btn-default','role'=>'modal-remote','title'=>'แก้ไข']);
                    },
//                    'delete'=>function($url,$model,$key){
//                         return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,[
//                                'title' => Yii::t('yii', 'Delete'),
//                                'data-confirm' => Yii::t('yii', 'คุณต้องการลบไฟล์นี้?'),
//                                'data-method' => 'post',
//                                'data-pjax' => '0',
//                                'class'=>'btn btn-default'
//                                ]);
//                    }
                ]
            ],  
];   