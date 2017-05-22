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

class Trans extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_trans}}';
    }

    public static function getById($id)
    {

        return Trans::find()->where(['id' => $id])->one();
    }

    public static function getList($field='')
    {
        return Trans::find()->where($field)->asArray()->all();
    }



}