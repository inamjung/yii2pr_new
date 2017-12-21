<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\health\models\Insys */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="insys-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Vstdate')->textInput() ?>

    <?= $form->field($model, 'Cid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Vn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Age_y')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pttype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Clinic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Drugallergy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pdx')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Height')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Waist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bpd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bps')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Drinking_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Smoking_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pulse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Temperature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Fbs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bmi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hdl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Glucurine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Bun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Creatinine')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hba1c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ldl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ast')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cholesterol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gfr_ckd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Hct_cbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc_count_cbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Eo_cbc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urine_proteine_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Urine_gluose_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Rbc_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Wbc_ua')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Parasite')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Occountblood')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Uric')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tsh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Dx_doctor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Dname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ic_confirm')->textInput() ?>

    <?= $form->field($model, 'ic_insys')->textInput() ?>

    <?= $form->field($model, 'ic_report')->textInput() ?>

    <?= $form->field($model, 'Lab01')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab02')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab03')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab04')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab05')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab06')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Lab07')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
