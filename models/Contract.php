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

class Contract extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_contract}}';
    }

    public static function getById($id)
    {
        return Contract::find()->where(['id' => $id])->one();
    }

    public static function getAllAgent()
    {
        return Contract::find()->all();
    }

    public static function getList($field){
        return Contract::find()->asArray()->where($field);
    }


}