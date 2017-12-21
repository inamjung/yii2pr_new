<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CustomersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Customers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
             'department_id',
            [
                'attribute'=>'department_id',
                'value'=> function($model){
                    return $model->dep->name;
                }
            ],         
            // 'd_create',
            // 'd_update',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
