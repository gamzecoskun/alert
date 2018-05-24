<?php

namespace kouosl\alert\models;

use Yii;

/**
 * This is the model class for table "alert".
 *
 * @property int $id
 * @property string $name
 * @property string $kind
 */
class Alert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alert';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'kind'], 'required'],
            [['id'], 'integer'],
            [['name', 'kind'], 'string', 'max' => 20],
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
            'kind' => 'Kind',
        ];
    }
}
