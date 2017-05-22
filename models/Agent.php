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

class Agent extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_agent}}';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position' => 'Должность',
            'type_object' => 'Тип объекта',
            'phone' => 'Телефон',
            'email' => 'Email',
            'birthday' => 'День рождения',
            'user_id' => 'USER_ID',
            'name' => 'Имя',
            'logo_path' => 'Лого',

        ];
    }

    public static function inits($type)
    {
        $type = Objects::find()->where(['id' => $type])->one();
        return $type;
    }


    public function rules()
    {
        return [
            [['id' ,
'position' ,
'type_object' ,
'phone' ,
'email' ,
'birthday' ,
'user_id' ,
'name' ,
'logo_path'
            ], 'safe'],
        ];
    }
    public static function getById($id)
    {
        return Agent::find()->where(['id' => $id])->one();
    }

    public static function getAllAgent()
    {
        return Agent::find()->all();
    }

    public static function getList($field=''){
        return Agent::find()->asArray()->where($field)->all();
    }


}