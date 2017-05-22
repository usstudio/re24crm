<?php
/**
 * Created by PhpStorm.
 * User: pleoq
 * Date: 09.04.2017
 * Time: 20:06
 */

namespace app\models;

use yii\db\ActiveRecord;

class Objects extends ActiveRecord
{
    public $status;

    public static function tableName()
    {
        return '{{crm_object}}';
    }

    public function fields()
    {
        $this->type = "1";
        $fields = parent::fields();
        $adds = ['type' => function () {
            return 3;
        }];

        return $fields + $adds;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Тип объекта',
            'owner' => 'Собственник',
            'buyer' => 'Покупатель',
            'agent' => 'Агент',
            'price' => 'Цена',
            'address' => 'Адрес',
            'state' => 'Состояние',
            'area' => 'Площадь',
            'image' => 'Изображение',
            'status' => 'Статус',
            'built' => 'Год постройки',
            'rooms_count' => 'Кол-во комнат',
            'bedrooms' => 'Спальных комнат',
            'parking' => 'Парковка',
            'latitude' => 'Широта',
            'longitude' => 'Долгота',
            'level' => 'Этаж',
            'flour' => 'Тип пола',
            'description' => 'Описание',
            'jk' => 'ЖК',
            'metro' => 'Метро',
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

    public static function getById($id)
    {

        return Objects::find()->where(['id' => $id])->one();
    }

    public static function getAllObjects()
    {
        return Objects::find()->all();
    }

    public static function getList($field = '')
    {
        return Objects::find()->where($field)->asArray()->all();
    }
}