<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\companytable;

/**
 * CompanySearch represents the model behind the search form of `app\models\companytable`.
 */
class CompanySearch extends companytable
{
    /**
     * {@inheritdoc}
     */
    public $globalSearch;

    public function rules()
    {
        return [
            [['No'], 'integer'],
            [['Name', 'globalSearch', 'Type', 'Address', 'Phone'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = companytable::find();

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

        $query->orFilterWhere(['like', 'Name', $this->globalSearch])
            ->orFilterWhere(['like', 'Type', $this->globalSearch])
            ->orFilterWhere(['like', 'Address', $this->globalSearch])
            ->orFilterWhere(['like', 'Phone', $this->globalSearch]);

        return $dataProvider;
    }
}
