<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\health\models\Insys */

$this->title = 'Update Insys: ' . $model->Vn;
$this->params['breadcrumbs'][] = ['label' => 'Insys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Vn, 'url' => ['view', 'id' => $model->Vn]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="insys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
