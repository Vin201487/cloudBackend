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
<html>
<head>
	<title></title>
</head>
<?php $this->head() ?>
<?php  $this->beginBody()?>
<body class="login-bg">
<?= $content ?>
</body>
<?php  $this->endBody()?>
</html>
<?php $this->endPage() ?>



