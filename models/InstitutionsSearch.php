<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Institutions;

/**
 * InstitutionsSearch represents the model behind the search form of `app\models\Institutions`.
 */
class InstitutionsSearch extends Institutions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'postal_code', 'country', 'province', 'current_safety', 'current_security', 'current_usage', 'current_value', 'number_building', 'number_level', 'number_room'], 'integer'],
            [['name', 'logo', 'telephone', 'fax', 'email', 'address', 'country_code', 'createdAt', 'updatedAt'], 'safe'],
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
        $query = Institutions::find();

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
            'postal_code' => $this->postal_code,
            'country' => $this->country,
            'province' => $this->province,
            'current_safety' => $this->current_safety,
            'current_security' => $this->current_security,
            'current_usage' => $this->current_usage,
            'current_value' => $this->current_value,
            'number_building' => $this->number_building,
            'number_level' => $this->number_level,
            'number_room' => $this->number_room,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
        ]);

        $query->andFilterWhere(['ilike', 'name', $this->name])
            ->andFilterWhere(['ilike', 'logo', $this->logo])
            ->andFilterWhere(['ilike', 'telephone', $this->telephone])
            ->andFilterWhere(['ilike', 'fax', $this->fax])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'address', $this->address])
            ->andFilterWhere(['ilike', 'country_code', $this->country_code]);

        return $dataProvider;
    }
}
