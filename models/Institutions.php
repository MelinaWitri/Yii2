<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "institutions".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $logo
 * @property string|null $telephone
 * @property string|null $fax
 * @property string|null $email
 * @property int|null $postal_code
 * @property string|null $address
 * @property int|null $country
 * @property string|null $country_code
 * @property int|null $province
 * @property int|null $current_safety
 * @property int|null $current_security
 * @property int|null $current_usage
 * @property int|null $current_value
 * @property int|null $number_building
 * @property int|null $number_level
 * @property int|null $number_room
 * @property string $createdAt
 * @property string|null $updatedAt
 *
 * @property Departments[] $departments
 * @property Levels[] $levels
 */
class Institutions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName()
    {
        return 'institutions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['postal_code', 'country', 'province', 'current_safety', 'current_security', 'current_usage', 'current_value', 'number_building', 'number_level', 'number_room'], 'default', 'value' => null],
            [['postal_code', 'country', 'province', 'current_safety', 'current_security', 'current_usage', 'current_value', 'number_building', 'number_level', 'number_room'], 'integer'],
            [['createdAt'], 'required'],
            [['createdAt', 'updatedAt'], 'safe'],
            [['file'],'file'],
            [['name', 'logo', 'telephone', 'fax', 'email', 'address'], 'string', 'max' => 255],
            [['country_code'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'logo' => 'Logo',
            'telephone' => 'Telephone',
            'fax' => 'Fax',
            'email' => 'Email',
            'postal_code' => 'Postal Code',
            'address' => 'Address',
            'country' => 'Country',
            'country_code' => 'Country Code',
            'province' => 'Province',
            'current_safety' => 'Current Safety',
            'current_security' => 'Current Security',
            'current_usage' => 'Current Usage',
            'current_value' => 'Current Value',
            'number_building' => 'Number Building',
            'number_level' => 'Number Level',
            'number_room' => 'Number Room',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Departments::className(), ['institution_id' => 'id']);
    }

    /**
     * Gets query for [[Levels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLevels()
    {
        return $this->hasMany(Levels::className(), ['institution_id' => 'id']);
    }
}
