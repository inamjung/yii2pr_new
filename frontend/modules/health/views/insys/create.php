<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\modules\health\models\Insys */

$this->title = 'Create Insys';
$this->params['breadcrumbs'][] = ['label' => 'Insys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
