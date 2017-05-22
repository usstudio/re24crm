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

class ObjectsMetro extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_object_metro}}';
    }

    public static function getById($id)
    {

        return ObjectsMetro::find()->where(['id' => $id])->one();
    }

    public static function getList($field='')
    {
        return ObjectsMetro::find()->where($field)->asArray()->all();
    }


}