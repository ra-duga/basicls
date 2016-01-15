<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "developers".
 *
 * @property string $id
 * @property string $name
 * @property string $create_date
 * @property string $update_date
 * @property string $logotype
 * @property string $descripition
 *
 * @property Objects[] $objects
 */
class Developers extends \yii\db\ActiveRecord
{

    public function beforeSave($insert)
    {
      // Установим дату создания и обнвления
      if (parent::beforeSave($insert)) {
        if($insert == true)
        {
          $this->create_date=time();
        }
        else
          $this->update_date=time();
        return true;
      } else {
        return false;
      }
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'developers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descripition'], 'required'],
            [['create_date'], 'safe'],
            [['name', 'update_date', 'logotype', 'descripition'], 'string', 'max' => 45],
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
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'logotype' => 'Логотип',
            'descripition' => 'Описание',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
  //      return $this->hasMany(Objects::className(), ['developers_id' => 'id']);
    }
    
    
    public static function getList()
    { 
      return  Developers::find()->All();
    }
}
