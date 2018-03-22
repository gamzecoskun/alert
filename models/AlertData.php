<?php

namespace kouosl\alert\models;

use Yii;

/**
 * This is the model class for table "alert_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $alert_id
 *
 * @property Alert $alert
 */
class AlertData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alert_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'alert_id'], 'required'],
            [['alert_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['alert_id'], 'exist', 'skipOnError' => true, 'targetClass' => Alert::className(), 'targetAttribute' => ['alert_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'alert_id' => 'Alert ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlert()
    {
        return $this->hasOne(Alert::className(), ['id' => 'alert_id']);
    }
}
