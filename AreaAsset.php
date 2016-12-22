<?php
namespace echotrue\area;

use yii\web\AssetBundle;

class AreaAsset extends AssetBundle
{
    public $js  = [
        'assets/js/area.js',
    ];
    public $css = [
        'assets/css/area.css',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        /**
         * the assets url
         */
        $this->sourcePath = __DIR__;
    }
}