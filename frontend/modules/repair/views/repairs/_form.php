<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use kartik\datecontrol\DateControl;

/* @var $this yii\web\View */
/* @var $model frontend\modules\repair\models\Repairs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repairs-form">
    <style media="screen">
.modal.in .modal-dialog {
    width: 70%;
}

</style>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_id')->widget(Select2::classname(), [
    'data' => yii\helpers\ArrayHelper::map(frontend\modules\repair\models\Departments::find()->all(), 'id', 'name'),
    'language' => 'th',
    'options' => ['placeholder' => 'หน่วยงาน ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);?>

    <?= $form->field($model, 'datenotuse')->widget(DateControl::classname(), [
    'type'=>DateControl::FORMAT_DATE,
    'ajaxConversion'=>false,
    'widgetOptions' => [
        'pluginOptions' => [
            'autoclose' => true
                  ]
                ]
      ]);?>

    <?= $form->field($model, 'tool_id')->widget(Select2::classname(), [
    'data' => yii\helpers\ArrayHelper::map(\frontend\modules\repair\models\Tools::find()->all(), 'id', 'name'),
    'language' => 'th',
    'options' => ['placeholder' => 'เลือกอุปกรณ์ ...'],
    'pluginOptions' => [
        'allowClear' => true
    ],
]);?>

    <?php //echo $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'problem')->textarea(['rows' => 6]) ?>

    <?php //echo $form->field($model, 'stage')->dropDownList([ 'รอได้ภายใน 3 วัน' => 'รอได้ภายใน 3 วัน', 'รอได้ภายใน 7 วัน' => 'รอได้ภายใน 7 วัน', 'รอได้ภายใน 1 วัน' => 'รอได้ภายใน 1 วัน', ], ['prompt' => '']) ?>

    <?php //echo $form->field($model, 'startdate')->textInput() ?>

    <?php //echo $form->field($model, 'satatus')->dropDownList([ 'รอรับงาน' => 'รอรับงาน', 'รับงานแล้ว' => 'รับงานแล้ว', ], ['prompt' => '']) ?>

    <?php //echo $form->field($model, 'dateplan')->textInput() ?>

    <?php //echo $form->field($model, 'remark')->textarea(['rows' => 6]) ?>

    <?php //echo $form->field($model, 'answer')->dropDownList([ 'รอซ่อม' => 'รอซ่อม', 'กำลังซ่อม' => 'กำลังซ่อม', 'ซ่อมเสร็จแล้ว' => 'ซ่อมเสร็จแล้ว', 'ซ่อมไม่ได้' => 'ซ่อมไม่ได้', ], ['prompt' => '']) ?>

    <?php //echo $form->field($model, 'enddate')->textInput() ?>

    <?php //echo $form->field($model, 'user_id')->textInput() ?>

    <?php //echo $form->field($model, 'confirm')->textInput() ?>

    <?php //echo $form->field($model, 'confirm_detail')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'createDate')->textInput() ?>

    <?php //echo $form->field($model, 'updateDate')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
