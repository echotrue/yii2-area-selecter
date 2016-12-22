<?php
/**
 * Description of Yii2.0 area selecter
 *
 * @author  Axlrose <hp , *@qq.com>
 * @link    http://www.github.com
 * @date    2016-12-20
 * @warning beta 1.0
 */

namespace echotrue\area;


use yii\base\InvalidConfigException;
use yii\base\InvalidParamException;
use yii\helpers\Html;
use yii\widgets\InputWidget;

/**
 * Class Area
 *
 * @package echotrue\area
 */
class Area extends InputWidget
{
    public $template = "<div class='row'>{hideInput}<div class='col-sm-2'>{province}</div><div class='col-sm-2'>{city}</div><div class='col-sm-2'>{regional}</div></div>";

    public function init()
    {
        if (!isset($this->options['url'])) {
            throw new InvalidConfigException('Params `url` not found !');
        }

        isset($this->options['template']) && $this->template = $this->options['template'];

        parent::init();
    }

    public function run()
    {
        $view = $this->getView();
        AreaAsset::register($view);

        echo $this->renderDom();
    }

    private function renderDom()
    {
        if ($this->hasModel()) {

            if (!isset($this->attribute)) {
                throw new InvalidParamException('参数错误');
            }
            return strtr($this->template, [
                '{hideInput}' => Html::hiddenInput('url', $this->options['url'], ['id' => 'url']),
                '{province}'  => Html::activeDropDownList($this->model, $this->attribute . '[province]', ['0' => '请选择'],
                    ['class' => 'form-control', 'id' => 'province']),
                '{city}'      => Html::activeDropDownList($this->model, $this->attribute . '[city]', ['0' => '请选择'],
                    ['class' => 'form-control', 'id' => 'city']),
                '{regional}'  => Html::activeDropDownList($this->model, $this->attribute . '[regional]', ['0' => '请选择'],
                    ['class' => 'form-control', 'id' => 'regional']),
            ]);
        } else {
            return strtr($this->template, [
                '{hideInput}' => Html::hiddenInput('url', $this->options['url'], ['id' => 'url']),
                '{province}'  => Html::dropDownList($this->name . '[province]', null, ['0' => '请选择'],
                    ['id' => 'province', 'class' => 'form-control']),
                '{city}'      => Html::dropDownList($this->name . '[city]', null, ['0' => '请选择'],
                    ['id' => 'city', 'class' => 'form-control']),
                '{regional}'  => Html::dropDownList($this->name . '[regional]', null, ['0' => '请选择'],
                    ['id' => 'regional', 'class' => 'form-control']),
            ]);
        }
    }
}