<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/site.css',
        'common/css/bootstrap.min.css',
        'common/css/style.css',
        'common/css/site.css',
        'common/css/plugins/owl-carousel/owl.carousel.css',
        'common/css/plugins/magnific-popup/magnific-popup.css',
        'common/css/plugins/jquery.countdown.css',
        'common/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css',
    ];
    public $js       = [
        'common/js/main.js',
        'common/js/bootstrap.bundle.min.js',
        'common/js/jquery.magnific-popup.min.js',
        'common/js/jquery.hoverIntent.min.js',
        'common/js/jquery.waypoints.min.js',
        'common/js/superfish.min.js',
        'common/js/owl.carousel.min.js',
        'common/js/bootstrap-input-spinner.js',
        'common/js/jquery.plugin.min.js',
        'common/js/jquery.magnific-popup.min.js',
        'common/js/jquery.countdown.min.js',
        'common/js/site',
    ];
    public $depends  = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
