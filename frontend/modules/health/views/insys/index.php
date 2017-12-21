<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\health\models\InsysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Insys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insys-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Insys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Vstdate',
            'Cid',
            'Vn',
            'Hn',
            'Pt',
            // 'Sex',
            // 'Age_y',
            // 'Pttype',
            // 'Clinic',
            // 'Drugallergy',
            // 'Pdx',
            // 'Height',
            // 'Bw',
            // 'Waist',
            // 'Cc',
            // 'Bp',
             'Bpd',
             'Bps',
            // 'Drinking_type_id',
            // 'Smoking_type_id',
            // 'Hr',
            // 'Pe',
            // 'Pulse',
            // 'Temperature',
            // 'Rr',
             'Fbs',
             'Bmi',
             'Tg',
             'Hdl',
            // 'Glucurine',
            // 'Bun',
            // 'Creatinine',
            // 'Ua',
            // 'Hba1c',
            // 'Tc',
            // 'Ldl',
            // 'Ast',
            // 'Alt',
            // 'Cholesterol',
            // 'Gfr_ckd',
            // 'Hct_cbc',
            // 'Wbc_count_cbc',
            // 'Eo_cbc',
            // 'Urine_proteine_ua',
            // 'Urine_gluose_ua',
            // 'Rbc_ua',
            // 'Wbc_ua',
            // 'Parasite',
            // 'Occountblood',
            // 'Uric',
            // 'Tsh',
            // 'Dx_doctor',
            // 'Dname',
            // 'ic_confirm',
            // 'ic_insys',
            // 'ic_report',
            // 'Lab01',
            // 'Lab02',
            // 'Lab03',
            // 'Lab04',
            // 'Lab05',
            // 'Lab06',
            // 'Lab07',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
