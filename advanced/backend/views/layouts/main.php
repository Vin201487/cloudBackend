<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="background: #293038; text-decoration: none;">
<?php $this->beginBody() ?>
<div class="wrap">
<div class="view-topbar">
    <div class="topbar-console">
        <div class="tobar-head fl">
            <a href="#" class="topbar-logo fl">
            <span><img src="../../CDN/Images/logo.png" width="20" height="20"/></span>
            </a>
            <a href="index.html" class="topbar-home-link topbar-btn text-center fl"><span>管理控制台</span></a>
        </div>
    </div>
    <div class="topbar-info">
        <ul class="fr">
            <li class="fl dropdown topbar-notice topbar-btn">
            <a href="#" class="dropdown-toggle">
            <span class="icon-notice"></span>
            <span class="topbar-num have">0</span>
            <!--have表示有消息，没有消息去掉have-->
            </a>
            </li>
            <!--                    <li class="fl topbar-info-item strong">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle topbar-btn">
                <span class="fl">工单服务</span>
                <span class="icon-arrow-down"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">我的工单</a></li>
                    <li><a href="#">提交工单</a></li>
                </ul>
            </div>
            </li>
             -->
            <li class="fl topbar-info-item">
            <div class="dropdown">
                <a href="#" class="topbar-btn">
                <span class="fl text-normal">帮助与文档</span>
                <span class="icon-arrow-down"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">模板开发手册</a></li>
                    <li><a href="#">某某数据字典</a></li>
                </ul>
            </div>
            </li>
            <li class="fl topbar-info-item">
            <div class="dropdown">
                <a href="#" class="topbar-btn">
                <span class="fl text-normal"><?=Yii::$app->user->identity->username?></span>
                <span class="icon-arrow-down"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <?= Html::a('退出',['site/logout'],['data' => ['confirm' => Yii::t('app','你确定需要退出系统吗?'),'method' => 'post']]);?>
                    </li>
                </ul>
            </div>
            </li>
        </ul>
    </div>
</div>


<div class="view-sidebar">
                <div class="sidebar-content">
                    <div class="sidebar-nav">
                        <div class="sidebar-title">
                            <a href="#">
                                <span class="icon"><b class="fl icon-arrow-down"></b></span>
                                <span class="text-normal">产品与服务</span>
                            </a>
                        </div>
                        <ul class="sidebar-trans">
                            <li>
                                <a href="webSet.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_author.png" width="16" height="16" /></b>
                                    <span class="text-normal">站点管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="smsInfo.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_message.png" width="16" height="16" /></b>
                                    <span class="text-normal">短信</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="#">
                                    <b class="sidebar-icon"><img src="Images/icon_market.png" width="16" height="16" /></b>
                                    <span class="text-normal">云市场</span>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="sidebar-nav">
                        <div class="sidebar-title">
                            <a href="#">
                                <span class="icon"><b class="fl icon-arrow-down"></b></span>
                                <span class="text-normal">用户中心</span>
                            </a>
                        </div>
                        <ul class="sidebar-trans">
                            <li>
                                <a href="userInfo.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_cost.png" width="16" height="16" /></b>
                                    <span class="text-normal">账号管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="identify.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_authentication.png" width="16" height="16" /></b>
                                    <span class="text-normal">实名认证</span>
                                </a>
                            </li>
                            <li>
                                <a href="message.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_news.png" width="16" height="16" /></b>
                                    <span class="text-normal">消息中心</span>
                                </a>
                            </li>
                            <li>
                                <a href="money.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_gold.png" width="16" height="16" /></b>
                                    <span class="text-normal">金币管理</span>
                                </a>
                            </li>
                            <li>
                                <a href="order.html">
                                    <b class="sidebar-icon"><img src="../../CDN/Images/icon_order.png" width="16" height="16" /></b>
                                    <span class="text-normal">订单管理</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>





    <div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<script>
            $(".sidebar-title").live('click', function() {
                if ($(this).parent(".sidebar-nav").hasClass("sidebar-nav-fold")) {
                    $(this).next().slideDown(200);
                    $(this).parent(".sidebar-nav").removeClass("sidebar-nav-fold");
                } else {
                    $(this).next().slideUp(200);
                    $(this).parent(".sidebar-nav").addClass("sidebar-nav-fold");
                }
            });
        </script>

</html>
<?php $this->endPage() ?>
