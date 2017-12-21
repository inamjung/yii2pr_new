<?php

/**
 * @var string $content
 * @var \yii\web\View $this
 */
use yii\helpers\Html;

$bundle = yiister\gentelella\assets\Asset::register($this);
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="<?= Yii::$app->charset ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
<?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="nav-<?= !empty($_COOKIE['menuIsCollapsed']) && $_COOKIE['menuIsCollapsed'] == 'true' ? 'sm' : 'md' ?>" >
<?php $this->beginBody(); ?>
        <div class="container body">

            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?= Yii::$app->homeUrl ?>" class="site_title">
                                <img style="height:40px; width:auto; margin-top:-5px;" src="./img/cdcswl.png"> 
                                <span><?= Yii::$app->name ?></span></a>
                        </div>
                        <div class="clearfix"></div>

                        <!-- menu prile quick info -->

                        <!-- /menu prile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                            <div class="menu_section">
                                <div class="" style="font-size: 20px; color: white; padding-left: 10px; ">
                                    เมนู
                                </div>
<?php
$userrepair = \frontend\modules\repair\models\Repairs::find()->count();

?>
                                <?=
                                \yiister\gentelella\widgets\Menu::widget(
                                        [
                                            "items" => [
                                                    ["label" => "Home",
                                                    "url" => Yii::$app->homeUrl,
                                                    "icon" => "home"
                                                ],
                                                    [
                                                    "label" => "ระบบแจ้งซ่อม",
                                                    "url" => "#",
                                                    "icon" => "table",
                                                    "items" => [
                                                            [
                                                            "label" => "รายการซ่อม-admin",
                                                            "url" => ["/repair/repairs/indexadmin"],
                                                            "badge" => $userrepair,
                                                            "badgeOptions" => ["class" => "label-warning"],
                                                            'active' => true,
                                                        ],
                                                            [
                                                            "label" => "รายการซ่อม-user",
                                                            "url" => ["/repair/repairs/index"],
                                                            "badge" => $userrepair,
                                                            "badgeOptions" => ["class" => "label-info"],
                                                            'active' => true,
                                                        ],
                                                    ],
                                                ],
                                                [
                                                    "label" => "รายงาน-Hosxp",
                                                    "url" => "#",
                                                    "icon" => "list",
                                                    "items" => [
                                                            [
                                                            "label" => "IPD",
                                                            "url" => ["/hosxp/ipd/index"],  
                                                        ],
                                                            
                                                    ],
                                                ],
                                                [
                                                    "label" => "ข้อมูลตรวจสุขภาพ",
                                                    "url" => "#",
                                                    "icon" => "list",
                                                    "items" => [
                                                            [
                                                            "label" => "ระบุvisit",
                                                            "url" => ["/health/healthhos/hosvisit"],  
                                                        ],
                                                        [
                                                            "label" => "ข้อมูล",
                                                            "url" => ["/health/insys/index"],  
                                                        ],    
                                                    ],
                                                ],
                                                
                                                    [
                                                    "label" => "Multilevel",
                                                    "url" => "#",
                                                    "icon" => "table",
                                                    "items" => [
                                                            [
                                                            "label" => "Second level 1",
                                                            "url" => "#",
                                                        ],
                                                            [
                                                            "label" => "Second level 2",
                                                            "url" => "#",
                                                            "items" => [
                                                                    [
                                                                    "label" => "Third level 1",
                                                                    "url" => "#",
                                                                ],
                                                                    [
                                                                    "label" => "Third level 2",
                                                                    "url" => "#",
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ]
                                )
                                ?>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->

                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">

                    <div class="nav_menu">
                        <nav class="" role="navigation">
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                         <?php if (Yii::$app->user->isGuest) { ?>
                                <li>

                                    <?php echo Html::a('เข้าสู่ระบบ</span>', yii\helpers\Url::to(['/user/security/login']))?>
                                </li>

                        <?php }?>
                        <?php if (!Yii::$app->user->isGuest) { ?>
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
<!--                                <img src="http://placehold.it/128x128" alt="">John Doe-->
                                <?php echo Yii::$app->user->identity->username; ?>
                                <span class=" fa fa-angle-down"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                
<!--                                <li>
                                    <?php //echo Html::a('ข้อมูลส่วนตัว <i class="fa fa-user pull-right"></i>', yii\helpers\Url::to(['/users/indexuser']),['data-method'=>'post'])?>

                                </li>-->

                                <li>
                                    <?php echo Html::a('ออกจากระบบ <i class="fa fa-sign-out pull-right"></i>', yii\helpers\Url::to(['/site/logout']),['data-method'=>'post'])?>

                                </li>
                            </ul>

                        </li>
                        <?php }?>



                    </ul>
                        </nav>
                    </div>

                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
<?php if (isset($this->params['h1'])): ?>
                        <div class="page-title">
                            <div class="title_left">
                                <h1><?= $this->params['h1'] ?></h1>
                            </div>
                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endif; ?>
                    <div class="clearfix"></div>

<?= $content ?>
                </div>
                <!-- /page content -->
                <!-- footer content -->
                <!--        <footer>
                            <div class="pull-right">
                                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com" rel="nofollow" target="_blank">Colorlib</a><br />
                                Extension for Yii framework 2 by <a href="http://yiister.ru" rel="nofollow" target="_blank">Yiister</a>
                            </div>
                            <div class="clearfix"></div>
                        </footer>-->
                <!-- /footer content -->
            </div>

        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>
        <!-- /footer content -->
<?php $this->endBody(); ?>
    </body>
</html>
<?php $this->endPage(); ?>