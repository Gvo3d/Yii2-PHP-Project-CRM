<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Magazine;

/**
 * MagazineSearch represents the model behind the search form about `app\models\Magazine`.
 */
class MagazineSearch extends Magazine
{
    public function rules()
    {
        return [
            [['id', 'worker_id', 'project_id', 'role_id'], 'integer'],
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
        $query = Magazine::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
			'pagination' => [
        'pageSize' => 20,
    ]
        ]);

        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'worker_id' => $this->worker_id,
            'project_id' => $this->project_id,
            'role_id' => $this->role_id,
        ]);

        return $dataProvider;
    }
}
