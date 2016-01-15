<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agents".
 *
 * @property integer $id
 * @property string $name
 * @property string $low_name
 * @property string $adress
 * @property string $phone
 *
 * @property Comission[] $comissions
 */
class Agents extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agents';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'low_name', 'adress', 'phone'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'low_name' => 'Название юридического лица',
            'adress' => 'Адрес',
            'phone' => 'Контактный телефон',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComissions()
    {
        return $this->hasMany(Comission::className(), ['agents_id' => 'id']);

    }
}
