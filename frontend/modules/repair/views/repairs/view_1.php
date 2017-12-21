<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\modules\repair\models\Repairs */
?>
<div class="repairs-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'department_id',
            'datenotuse',
            'tool_id',
            'number',
            'problem:ntext',
            'stage',
            'startdate',
            'satatus',
            'dateplan',
            'remark:ntext',
            'answer',
            'enddate',
            'user_id',
            'confirm',
            'confirm_detail',
            'createDate',
            'updateDate',
        ],
    ]) ?>

</div>
