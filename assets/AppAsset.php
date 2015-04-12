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
    ];
   
    public $js = [
        'js/lib/handlebars-v3.0.0.js',
        'js/lib/pace.min.js',
        'js/lib/scrollReveal.min.js',
        'js/lib/jquery-ui.min.js',
        'js/lib/jquery.magnific-popup.min.js',
        'js/lib/isotope.pkgd.min.js',
        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
