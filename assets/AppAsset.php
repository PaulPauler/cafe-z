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
        'css/site.css',
        'css/simple-slide-show.css',
        'css/unite-gallery.css',
    ];
    public $js = [
        //'js/jquery-3.1.1.min.js',
        'js/simple-slide-show.js',
        'js/unitegallery.min.js',
        'js/ug-theme-tiles.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    //хак ебаный
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
