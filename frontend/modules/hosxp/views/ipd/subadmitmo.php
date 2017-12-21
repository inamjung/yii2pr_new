<?php

use kartik\grid\GridView;
?>
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
            'attribute'=>'an',
            'header'=>'AN'
        ],
        [
            'attribute'=>'hn',
            'header'=>'HN'
        ]
    ]
]);?>



