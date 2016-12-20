<?php
/**
 * Created by PhpStorm.
 * User: axlrose
 * Date: 2016/12/20
 * Time: 下午2:12
 */

namespace echotrue\area;


use yii\web\AssetBundle;

class AreaAsset extends AssetBundle
{
    public $js  = [
        'assets/js/area.js',
    ];
    public $css = [

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