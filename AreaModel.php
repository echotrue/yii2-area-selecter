<?php
namespace echotrue\area;

use yii\base\Model;
use Yii;
use yii\db\Query;

class AreaModel extends Model
{
    private $tableName;


    public function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    public function getAreaByParentId($parent_id = 0)
    {
        $query = new Query();
        return $query->select('*')
            ->from('{{%' . $this->tableName . '}}')
            ->where(['area_parent_id' => $parent_id])
            ->all();
    }

}