<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisions".
 *
 * @property int $id
 * @property string|null $div_name
 * @property string|null $div_desc
 * @property int|null $institution_id
 * @property int|null $dep_id
 * @property string $createdAt
 * @property string|null $updatedAt
 */
class Divisions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divisions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['institution_id', 'dep_id'], 'default', 'value' => null],
            [['institution_id', 'dep_id'], 'integer'],
            [['createdAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['div_name', 'div_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'div_name' => 'Div Name',
            'div_desc' => 'Div Desc',
            'institution_id' => 'Institution ID',
            'dep_id' => 'Dep ID',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }
}
