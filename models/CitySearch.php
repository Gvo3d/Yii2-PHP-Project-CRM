<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\City;

/**
 * CitySearch represents the model behind the search form about `app\models\City`.
 */
class CitySearch extends City
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['cityname'], 'safe'],
        ];
    }

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
        $query = City::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => [
        'pageSize' => 5,
    ]
		]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'cityname', $this->cityname]);

        return $dataProvider;
    }
}
