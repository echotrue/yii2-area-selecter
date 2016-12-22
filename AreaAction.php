<?php
namespace echotrue\area;

use yii\base\Action;
use Yii;

class AreaAction extends Action
{
    public $tableName;

    public $aid;

    public function run()
    {
        $model = new AreaModel();
        $model->setTableName($this->tableName);
        return json_encode(['code' => '1', 'data' => $model->getAreaByParentId(Yii::$app->request->post('aid'))]);
    }
}