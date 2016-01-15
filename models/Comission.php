<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comission".
 *
 * @property integer $id
 * @property integer $objects_id
 * @property integer $agents_id
 * @property string $create_data
 * @property string $update_data
 * @property integer $is_episode
 * @property string $start_epizode
 * @property string $end_epizode
 * @property float $value

 *
 * @property Agents $agents
 * @property Objects $objects
 */
class Comission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comission';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['objects_id', 'agents_id', 'value'], 'required'],
            [['id', 'objects_id', 'agents_id', 'is_episode'], 'integer'],
            [['value'], 'double'],
            [['start_epizode', 'end_epizode'], 'safe'],
            [['create_data', 'update_data'], 'string', 'max' => 45],
            [['agents_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agents::className(), 'targetAttribute' => ['agents_id' => 'id']],
            [['objects_id'], 'exist', 'skipOnError' => true, 'targetClass' => Objects::className(), 'targetAttribute' => ['objects_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'objects_id' => 'Objects ID',
            'value' => "Значение",
            'agents_id' => 'Agents ID',
            'create_data' => 'Create Data',
            'update_data' => 'Update Data',
            'is_episode' => 'Is Episode',
            'start_epizode' => 'Start Epizode',
            'end_epizode' => 'End Epizode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgents()
    {
        return $this->hasOne(Agents::className(), ['id' => 'agents_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjects()
    {
        return $this->hasOne(Objects::className(), ['id' => 'objects_id']);
    }
}
