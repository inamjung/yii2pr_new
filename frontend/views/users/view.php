<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Users */
?>
<div class="users-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email:email',
            'password_hash',
            'auth_key',
            'confirmed_at',
            'unconfirmed_email:email',
            'blocked_at',
            'registration_ip',
            'created_at',
            'updated_at',
            'flags',
            'last_login_at',
            'status',
            'password_reset_token',
            'name',
            'role',
            'department_id',
        ],
    ]) ?>

</div>
