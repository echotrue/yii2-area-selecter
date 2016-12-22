Yii2.0 area selecter
====================
Yii2.0 area selecter

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require --prefer-dist echotrue/yii2-area "*"
```

or add

```
"echotrue/yii2-area": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :


```
 Controller :
 public function actions()
     {
         return [
             'area'    => [
                 'class' => 'echotrue\area\AreaAction',
                 'tableName' => 'china_area',
             ]
         ];
     }
            
 View:           
 <?= $form->field($model,'name')->widget(\echotrue\area\Area::className(), [
        'model'     => $model,
        'options'   => [
            'tableName' => 'china_area',
            'url'       => \yii\helpers\Url::to(['site/area'])
        ]
    ]) ?>
```
or

```php
    Controller :
    public function actions()
     {
         return [
             'area'    => [
                 'class' => 'echotrue\area\AreaAction',
                 'tableName' => 'china_area',
             ]
         ];
     }
     View:
    echo \echotrue\area\Area::widget([
        'name'    => 'name',
        'options' => [
            'tableName' => 'china_area',
            'url'       => \yii\helpers\Url::to(['site/area'])
        ]
    ]);

```

configuration
-------------

options:
- `tableName` : The table'name of the area source,without table prefix
- `url` : The request url for inline actions . 
- `template` : default template like this , maybe you can customize your template

```
<div class='row'>
    {hideInput}
    <div class='col-sm-3'>{province}</div>
    <div class='col-sm-3'>{city}</div>
    <div class='col-sm-3'>{regional}</div>
</div>

```

