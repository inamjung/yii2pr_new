<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use kartik\widgets\DepDrop;

/* @var $this yii\web\View */
/* @var $model frontend\models\Customers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="customers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'addr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c')->widget(Select2::classname(), [
    'data' => yii\helpers\ArrayHelper::map(\frontend\models\Chw::find()->all(), 'id', 'name'),
    'language' => 'th',
    'options' => ['placeholder' => 'Select a state ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);?>

   <?=
    $form->field($model, 'a')->widget(DepDrop::className(), [
        'data' => [$programe],
        'options' => ['placeholder' => '<--อำเภอ-->'],
        'type' => DepDrop::TYPE_SELECT2,
        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
        'pluginOptions' => [
            'depends' => ['customers-c'],
            'url' => yii\helpers\Url::to(['/customers/get-programe']),
            'loadingText' => 'Loading1...',
        ],
    ]);
    ?>

    <?=
    $form->field($model, 't')->widget(DepDrop::className(), [
        'data' => [$risktype],
        'options' => ['placeholder' => '<--ตำบล-->',
        //'disabled'=>true, 
        ],
        'type' => DepDrop::TYPE_SELECT2,
        'select2Options' => ['pluginOptions' => ['allowClear' => true]],
        'pluginOptions' => [
            'depends' => ['customers-c', 'customers-a'],
            'url' => yii\helpers\Url::to(['/customers/get-risktype']),
            'loadingText' => 'Loading2...',
        ],
    ]);
    ?>

    <?= $form->field($model, 'p')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_id')->widget(Select2::classname(), [
    'data' => yii\helpers\ArrayHelper::map(\frontend\models\Departments::find()->all(), 'id', 'name'),
    'language' => 'th',
    'options' => ['placeholder' => 'เลือกแผนก...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
