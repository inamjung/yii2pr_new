<?php
use \kartik\datecontrol\Module;  // ตั้งค่า DateControl 
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'th',
    'name'=>'YII2-INAM',
    'components' => [
        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'formatter' => [ // ตั้งค่ารูปแแบการแสดงวันที่
            'dateFormat' => 'dd/MM/yyyy',
              'datetimeFormat' => 'dd/MM/yyyy H:i:s',
              'datetimeFormat' => 'php:d/m/Y H:i:s',
              'nullDisplay' => '',
           ],
           'thaiFormatter'=>[ // ตั้งค่ารูปแแบการแสดงวันที่ dixonsatit
            'class'=>'dixonsatit\thaiYearFormatter\ThaiYearFormatter',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules'=>[
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout'=>'left-menu'
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'user' => [
        'class' => 'dektrium\user\Module',
        'enableUnconfirmedLogin' => true,
        'confirmWithin' => 21600,
        'cost' => 12,
        'admins' => ['admin']
    ],
        'repair' => [
            'class' => 'frontend\modules\repair\Module',
        ],
        'hosxp' => [
            'class' => 'frontend\modules\hosxp\Module',
        ],
        'health' => [
            'class' => 'frontend\modules\health\Module',
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
         ],
        // DateControl Setting.... ตั้งค่าการแปลงวันที่
 'datecontrol' =>  [
    'class' => 'kartik\datecontrol\Module',
    'displaySettings' => [
      Module::FORMAT_DATE => 'dd/MM/yyyy',
      Module::FORMAT_TIME => 'hh:mm:ss a',
      Module::FORMAT_DATETIME => 'php:d/m/Y H:i:s',
    ],
    'saveSettings' => [
      Module::FORMAT_DATE => 'yyyy-MM-dd', // saves as unix timestamp
      Module::FORMAT_TIME => 'php:H:i:s',
      Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
    ],
    'displayTimezone' => 'Asia/Bangkok',
    'autoWidget' => true,
    'ajaxConversion'=>true,
    // default settings for each widget from kartik\widgets used when autoWidget is true
    'autoWidgetSettings' => [
      Module::FORMAT_DATE => ['type'=>2, 'pluginOptions'=>['autoclose'=>true,'todayHighlight' => true]], // example
      Module::FORMAT_DATETIME => ['type'=>2, 'pluginOptions'=>['autoclose'=>true,'todayHighlight' => true]], // setup if needed
      Module::FORMAT_TIME => [], // setup if needed
    ],
    'widgetSettings' => [
      Module::FORMAT_DATE => [
        'class' => 'yii\jui\DatePicker', // example
        'options' => [
          'dateFormat' => 'php:d-M-Y',
          'options' => ['class'=>'form-control'],
        ]
      ]
    ]
        ],
        // Datecontrol Setting End....
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'user/*',
            'users/*',
            'site/index',
            'admin/*',
            'repair/*',
            'health/*',
            'hosxp/*',
            'gii/*',
            'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
];
