<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

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
        //'dist/css/AdminLTE.css',
        //'dist/css/skins/_all-skins.min.css',
    ];
    public $js = [
        //'bootstrap/js/bootstrap.min.js',
        //'plugins/slimScroll/jquery.slimscroll.min.js',
        //'plugins/fastclick/fastclick.min.js',
        //'dist/js/app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
