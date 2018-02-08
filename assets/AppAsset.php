<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/bootstrap-material-design.min.css',
        //'css/bootstrap.min.css',
        //'css/ripples.min.css',
        'css/site.css',
        //'css/font-awesome.min.css',
        //'css/prettyPhoto.css',
        //'css/animate.css',
        //'css/main.css'

    ];
    public $js = [
        //'js/jquery.prettyPhoto.js',
        //'js/main.js'
        //'js/material.min.js',
        //'js/bootstrap.min.js'
        //'js/ripples.min.js'
        'js/site.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
}
