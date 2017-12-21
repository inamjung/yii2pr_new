<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\modules\health\models\InsysSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="insys-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Vstdate') ?>

    <?= $form->field($model, 'Cid') ?>

    <?= $form->field($model, 'Vn') ?>

    <?= $form->field($model, 'Hn') ?>

    <?= $form->field($model, 'Pt') ?>

    <?php // echo $form->field($model, 'Sex') ?>

    <?php // echo $form->field($model, 'Age_y') ?>

    <?php // echo $form->field($model, 'Pttype') ?>

    <?php // echo $form->field($model, 'Clinic') ?>

    <?php // echo $form->field($model, 'Drugallergy') ?>

    <?php // echo $form->field($model, 'Pdx') ?>

    <?php // echo $form->field($model, 'Height') ?>

    <?php // echo $form->field($model, 'Bw') ?>

    <?php // echo $form->field($model, 'Waist') ?>

    <?php // echo $form->field($model, 'Cc') ?>

    <?php // echo $form->field($model, 'Bp') ?>

    <?php // echo $form->field($model, 'Bpd') ?>

    <?php // echo $form->field($model, 'Bps') ?>

    <?php // echo $form->field($model, 'Drinking_type_id') ?>

    <?php // echo $form->field($model, 'Smoking_type_id') ?>

    <?php // echo $form->field($model, 'Hr') ?>

    <?php // echo $form->field($model, 'Pe') ?>

    <?php // echo $form->field($model, 'Pulse') ?>

    <?php // echo $form->field($model, 'Temperature') ?>

    <?php // echo $form->field($model, 'Rr') ?>

    <?php // echo $form->field($model, 'Fbs') ?>

    <?php // echo $form->field($model, 'Bmi') ?>

    <?php // echo $form->field($model, 'Tg') ?>

    <?php // echo $form->field($model, 'Hdl') ?>

    <?php // echo $form->field($model, 'Glucurine') ?>

    <?php // echo $form->field($model, 'Bun') ?>

    <?php // echo $form->field($model, 'Creatinine') ?>

    <?php // echo $form->field($model, 'Ua') ?>

    <?php // echo $form->field($model, 'Hba1c') ?>

    <?php // echo $form->field($model, 'Tc') ?>

    <?php // echo $form->field($model, 'Ldl') ?>

    <?php // echo $form->field($model, 'Ast') ?>

    <?php // echo $form->field($model, 'Alt') ?>

    <?php // echo $form->field($model, 'Cholesterol') ?>

    <?php // echo $form->field($model, 'Gfr_ckd') ?>

    <?php // echo $form->field($model, 'Hct_cbc') ?>

    <?php // echo $form->field($model, 'Wbc_count_cbc') ?>

    <?php // echo $form->field($model, 'Eo_cbc') ?>

    <?php // echo $form->field($model, 'Urine_proteine_ua') ?>

    <?php // echo $form->field($model, 'Urine_gluose_ua') ?>

    <?php // echo $form->field($model, 'Rbc_ua') ?>

    <?php // echo $form->field($model, 'Wbc_ua') ?>

    <?php // echo $form->field($model, 'Parasite') ?>

    <?php // echo $form->field($model, 'Occountblood') ?>

    <?php // echo $form->field($model, 'Uric') ?>

    <?php // echo $form->field($model, 'Tsh') ?>

    <?php // echo $form->field($model, 'Dx_doctor') ?>

    <?php // echo $form->field($model, 'Dname') ?>

    <?php // echo $form->field($model, 'ic_confirm') ?>

    <?php // echo $form->field($model, 'ic_insys') ?>

    <?php // echo $form->field($model, 'ic_report') ?>

    <?php // echo $form->field($model, 'Lab01') ?>

    <?php // echo $form->field($model, 'Lab02') ?>

    <?php // echo $form->field($model, 'Lab03') ?>

    <?php // echo $form->field($model, 'Lab04') ?>

    <?php // echo $form->field($model, 'Lab05') ?>

    <?php // echo $form->field($model, 'Lab06') ?>

    <?php // echo $form->field($model, 'Lab07') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
