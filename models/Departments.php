<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departments".
 *
 * @property int $id
 * @property string|null $dep_name
 * @property string|null $dep_desc
 * @property int|null $dep_code
 * @property int|null $institution_id
 * @property string $createdAt
 * @property string|null $updatedAt
 * @property string|null $deleted_at
 *
 * @property Institutions $institution
 */
class Departments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dep_code', 'institution_id'], 'default', 'value' => null],
            [['dep_code', 'institution_id'], 'integer'],
            [['createdAt'], 'required'],
            [['createdAt', 'updatedAt', 'deleted_at'], 'safe'],
            [['dep_name', 'dep_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dep_name' => 'Dep Name',
            'dep_desc' => 'Dep Desc',
            'dep_code' => 'Dep Code',
            'institution_id' => 'Institution ID',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[Institution]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstitution()
    {
        return $this->hasOne(Institutions::className(), ['id' => 'institution_id']);
    }
}
