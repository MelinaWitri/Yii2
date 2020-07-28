<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property int $id
 * @property string $country
 * @property int $country_code
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'country', 'country_code'], 'required'],
            [['id', 'country_code'], 'default', 'value' => null],
            [['id', 'country_code'], 'integer'],
            [['country'], 'string', 'max' => 225],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'country' => 'Country',
            'country_code' => 'Country Code',
        ];
    }
}
