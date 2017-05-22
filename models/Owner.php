<?php
/**
 * Created by PhpStorm.
 * User: pleoq
 * Date: 09.04.2017
 * Time: 20:06
 */

namespace app\models;

use yii\db\ActiveRecord;

class Owner extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_owner}}';
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'email' => 'Email',
            'phone' => 'Телефон',
            'object' => 'Объект',
            'agent' => 'Агент'
        ];
    }

    public function rules()
    {
        return [
            [
                [
                    'name',
                    'phone'
                ]
                ,'required'
            ],
            [
                 [
                'id',
                'name',
                'email',
                'phone',
                'object',
                'agent'
                ],
                'safe'
            ],
        ];
    }

    public static function getById($id)
    {
        return Owner::find()->where(['id' => $id])->one();
    }

    public static function getAllAgent()
    {
        return Owner::find()->all();
    }

    public static function getList($field = '')
    {
        return Owner::find()->where($field)->asArray()->all();
    }


}