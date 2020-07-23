<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "levels".
 *
 * @property int $id
 * @property string|null $level_name
 * @property int|null $number_rooms
 * @property int|null $current_safety
 * @property int|null $current_security
 * @property int|null $current_productivity
 * @property string|null $image
 * @property string|null $safety_feature
 * @property string|null $security_feature
 * @property string|null $material_floor
 * @property int|null $building_id
 * @property int|null $institution_id
 * @property string $createdAt
 * @property string|null $updatedAt
 * @property string|null $deleted_at
 *
 * @property Institutions $institution
 */
class Levels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'levels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number_rooms', 'current_safety', 'current_security', 'current_productivity', 'building_id', 'institution_id'], 'default', 'value' => null],
            [['number_rooms', 'current_safety', 'current_security', 'current_productivity', 'building_id', 'institution_id'], 'integer'],
            [['createdAt'], 'required'],
            [['createdAt', 'updatedAt', 'deleted_at'], 'safe'],
            [['level_name', 'image', 'safety_feature', 'security_feature', 'material_floor'], 'string', 'max' => 255],
 
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level_name' => 'Level Name',
            'number_rooms' => 'Number Rooms',
            'current_safety' => 'Current Safety',
            'current_security' => 'Current Security',
            'current_productivity' => 'Current Productivity',
            'image' => 'Image',
            'safety_feature' => 'Safety Feature',
            'security_feature' => 'Security Feature',
            'material_floor' => 'Material Floor',
            'building_id' => 'Building ID',
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
