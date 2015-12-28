<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objects".
 *
 * @property integer $id
 * @property integer $developers_id
 * @property string $name
 * @property string $descripition
 * @property string $logotype
 * @property string $create_date
 * @property string $update_date
 *
 * @property Developers $developers
 */
class Objects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'developers_id'], 'required'],
            [['id', 'developers_id'], 'integer'],
            [['name', 'descripition', 'logotype', 'create_date', 'update_date'], 'string', 'max' => 45],
            [['developers_id'], 'exist', 'skipOnError' => true, 'targetClass' => Developers::className(), 'targetAttribute' => ['developers_id' => 'id']],
        ];
    }


    public function relations()
    {
      return array(
      'developers_id' => array(self::BELONGS_TO, 'Developers', 'id'),
      );
    }


    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'developers_id' => 'Developers ID',
            'name' => 'Name',
            'descripition' => 'Descripition',
            'logotype' => 'Logotype',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDevelopers()
    {
        return $this->hasOne(Developers::className(), ['id' => 'developers_id']);
    }
}
