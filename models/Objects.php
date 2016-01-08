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
 * @property integer $create_date
 * @property integer $update_date
 * @property string $logotype
 */
class Objects extends \yii\db\ActiveRecord
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
        return 'objects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['developers_id', 'name'], 'required'],
            [['developers_id'], 'integer'],
            [['name', 'descripition', 'logotype'], 'string'],
        ];
    }
  public function relations()
    {
        return array(
            'developers'=>array(self::BELONGS_TO, 'Developers', 'developers_id'),
        );
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'developer.name' => 'Застройщик',
            'name' => 'Название',
            'descripition' => 'Описание',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
            'logotype' => 'Логотип',
        ];
    }
    
    public function getDeveloper()
    {
        return $this->hasOne(Developers::className(), ['id' => 'developers_id']);
    }    
}
