<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Departments;

/**
 * DepartmentsSearch represents the model behind the search form of `app\models\Departments`.
 */
class DepartmentsSearch extends Departments
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'dep_code', 'institution_id'], 'integer'],
            [['dep_name', 'dep_desc', 'createdAt', 'updatedAt', 'deleted_at'], 'safe'],
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
        $query = Departments::find();

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
            'dep_code' => $this->dep_code,
            'institution_id' => $this->institution_id,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['ilike', 'dep_name', $this->dep_name])
            ->andFilterWhere(['ilike', 'dep_desc', $this->dep_desc]);

        return $dataProvider;
    }
}
