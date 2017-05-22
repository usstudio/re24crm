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

class MyActiveRecord extends ActiveRecord
{

    public static function getById($id)
    {
        return self::find()->where(['id' => $id])->one();
    }



    public static function getList($field='')
    {
        return self::find()->where($field)->asArray()->all();
    }


}