<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = CDN_PATH;
    public $css = [
        'Css/identify.css',
        'Css/layout.css',    
        'Css/login.css',
        'Css/style.css',
        'Css/control_index.css',
    ];
    public $js = [
        'Js/jquery.js',
        'Js/jquery.cookie.js', 
        'Js/haidao.validate.js',
        'Js/Validform_v5.3.2_min.js',
        'Js/js.js',
        'JS/select.js',
        'Js/jquery-1.7.2.min.js',
        'Js/haidao.offcial.general.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
