<?php
/**
 * Created by PhpStorm.
 * User: axlrose
 * Date: 2016/12/20
 * Time: 下午2:11
 */

namespace echotrue\area;


use yii\base\Widget;

class Area extends Widget
{
    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $view = $this->getView();
        AreaAsset::register($view);

        $province = "<select><option value='0'>请选择省</option></select>";

        $city = "<select><option value='0'>请选择市</option></select>";

        $regional = "<select><option value='0'>请选择区</option></select>";

        echo $province . $city . $regional;
    }
}