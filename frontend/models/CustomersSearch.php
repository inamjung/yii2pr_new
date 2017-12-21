<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Customers;

/**
 * CustomersSearch represents the model behind the search form about `frontend\models\Customers`.
 */
class CustomersSearch extends Customers
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 't', 'a', 'c'], 'integer'],
            [['name', 'addr', 'p', 'tel', 'department_id', 'd_create', 'd_update'], 'safe'],
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
        $query = Customers::find();

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
            't' => $this->t,
            'a' => $this->a,
            'c' => $this->c,
            'd_create' => $this->d_create,
            'd_update' => $this->d_update,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'addr', $this->addr])
            ->andFilterWhere(['like', 'p', $this->p])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'department_id', $this->department_id]);

        return $dataProvider;
    }
}
