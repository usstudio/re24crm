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

class AgentPosition extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_agent_position}}';
    }

    public static function getById($id)
    {
        return AgentPosition::find()->where(['id' => $id])->one();
    }

    public static function getAllAgent()
    {
        return AgentPosition::find()->all();
    }

    public static function getList($field){
        return AgentPosition::find()->asArray()->where($field);
    }


}