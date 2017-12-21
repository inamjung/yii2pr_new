<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Customers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'addr',
            
            [
                'attribute'=>'c',
                'value'=> function($model){
                    return $model->chws->name;
                }
            ],
            [
                'attribute'=>'a',
                'value'=> function($model){
                    return $model->amps->name;
                }
            ],
            [
                'attribute'=>'t',
                'value'=> function($model){
                    return $model->tmbs->name;
                }
            ],        
            'p',
            'tel',
            [
                'attribute'=>'department_id',
                'value'=> function($model){
                    return $model->dep->name;
                }
            ], 
            'd_create',
            'd_update',
        ],
    ]) ?>

</div>
