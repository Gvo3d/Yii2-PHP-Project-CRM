<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Status;

/**
 * StatusSearch represents the model behind the search form about `app\models\Status`.
 */
class StatusSearch extends Status
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['statusName'], 'safe'],
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
        $query = Status::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => [
            'pageSize' => 5]
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'statusName', $this->statusName]);

        return $dataProvider;
    }
}
