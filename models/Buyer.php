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

class Buyer extends ActiveRecord
{


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'email' => 'Email',
            'phone' => 'Телефон',
            'price_from' => 'Цена от',
            'price_to' => 'Цена до',
            'type_object' => 'Тип объекта',
            'agent' => 'Агент',
            'comment' => 'Комментарий',
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
                'type',
                'owner',
                'buyer',
                'agent',
                'price',
                'address',
                'state',
                'area',
                'image',
                'status',
                'built',
                'rooms_count',
                'bedrooms',
                'parking',
                'latitude',
                'longitude',
                'level',
                'flour',
                'description',
                'jk',
                'metro',
            ], 'safe'],
        ];
    }

    public static function tableName()
    {
        return '{{crm_buyer}}';
    }

    public static function getById($id)
    {
        return Buyer::find()->where(['id' => $id])->one();
    }

    public static function getAllAgent()
    {
        return Buyer::find()->all();
    }

    public static function getList($field='')
    {
        return Buyer::find()->where($field)->asArray()->all();
    }


}