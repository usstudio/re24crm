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

class Request extends ActiveRecord
{
    public static function tableName()
    {
        return '{{crm_request}}';
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name'=> 'Имя',
            'email'=> 'Email',
            'phone'=> 'Телефон',
            'date'=> 'Дата',
            'active'=> 'Активность',
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
            [['id',
                'name',
                'email',
                'phone',
                'date',
                'active',
            ], 'safe'],
        ];
    }
    public static function getById($id)
    {

        return Request::find()->where(['id' => $id])->one();
    }

    public static function getList($field)
    {
        return Request::find()->where($field)->all();
    }


}