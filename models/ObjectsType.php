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

class ObjectsType extends MyActiveRecord
{
    public static function tableName()
    {
        return '{{crm_object_type}}';
    }

}