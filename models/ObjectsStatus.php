<?php
/**
 * Created by PhpStorm.
 * User: pleoq
 * Date: 09.04.2017
 * Time: 20:06
 */

namespace app\models;
use yii;
use yii\db\ActiveRecord;

class ObjectsStatus extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_object_status}}';
    }

    public static function getById($id)
    {

        return ObjectsStatus::find()->where(['id' => $id])->one();
    }

    public static function getList($field='')
    {
        return ObjectsStatus::find()->where($field)->asArray()->all();
    }


}