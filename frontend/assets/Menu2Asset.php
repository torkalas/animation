<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Menu2Asset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        //'css/style.css',
        //'bootstrap/css/bootstrap.min.css',
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.min.css',
        //'plugins/iCheck/flat/blue.css',
        //'plugins/morris/morris.css',
        //'plugins/jvectormap/jquery-jvectormap-1.2.2.css',
        //'plugins/datepicker/datepicker3.css',
        //'plugins/daterangepicker/daterangepicker-bs3.css',
        //'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    ];
    public $js = [
        //'plugins/jQuery/jQuery-2.1.4.min.js',
        'bootstrap/js/bootstrap.min.js',
        //'plugins/morris/morris.min.js',
        //'plugins/sparkline/jquery.sparkline.min.js',
        //'plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
        //'plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
        //'plugins/knob/jquery.knob.js',
        //'plugins/daterangepicker/daterangepicker.js',
        //'plugins/datepicker/bootstrap-datepicker.js',
        //'plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
        'plugins/slimScroll/jquery.slimscroll.min.js',
        'plugins/fastclick/fastclick.min.js',
        'dist/js/app.js',
        //'dist/js/pages/dashboard.js',
        //'dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
