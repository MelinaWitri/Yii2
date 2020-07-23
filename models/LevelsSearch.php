<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Levels;

/**
 * LevelsSearch represents the model behind the search form of `app\models\Levels`.
 */
class LevelsSearch extends Levels
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number_rooms', 'current_safety', 'current_security', 'current_productivity', 'building_id', 'institution_id'], 'integer'],
            [['level_name', 'image', 'safety_feature', 'security_feature', 'material_floor', 'createdAt', 'updatedAt', 'deleted_at'], 'safe'],
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
        $query = Levels::find();

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
            'number_rooms' => $this->number_rooms,
            'current_safety' => $this->current_safety,
            'current_security' => $this->current_security,
            'current_productivity' => $this->current_productivity,
            'building_id' => $this->building_id,
            'institution_id' => $this->institution_id,
            'createdAt' => $this->createdAt,
            'updatedAt' => $this->updatedAt,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['ilike', 'level_name', $this->level_name])
            ->andFilterWhere(['ilike', 'image', $this->image])
            ->andFilterWhere(['ilike', 'safety_feature', $this->safety_feature])
            ->andFilterWhere(['ilike', 'security_feature', $this->security_feature])
            ->andFilterWhere(['ilike', 'material_floor', $this->material_floor]);

        return $dataProvider;
    }
}
