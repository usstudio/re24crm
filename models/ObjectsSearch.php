<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objects;

/**
 * ObjectsSearch represents the model behind the search form about `app\models\Objects`.
 */
class ObjectsSearch extends Objects
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'owner', 'agent', 'price', 'state', 'area', 'image', 'built', 'rooms_count', 'bedrooms', 'parking', 'buyer', 'level', 'metro', 'jk'], 'integer'],
            [['address', 'status', 'flour', 'description'], 'safe'],
            [['latitude', 'longitude'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Objects::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'type' => $this->type,
            'owner' => $this->owner,
            'agent' => $this->agent,
            'price' => $this->price,
            'state' => $this->state,
            'area' => $this->area,
            'image' => $this->image,
            'built' => $this->built,
            'rooms_count' => $this->rooms_count,
            'bedrooms' => $this->bedrooms,
            'parking' => $this->parking,
            'buyer' => $this->buyer,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'level' => $this->level,
            'metro' => $this->metro,
            'jk' => $this->jk,
        ]);

        $query->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'flour', $this->flour])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
