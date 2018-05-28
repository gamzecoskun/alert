<?php

namespace kouosl\alert\models;

use Yii;

/**
 * This is the model class for table "alert".
 *
 * @property int $id
 * @property string $turu
 * @property string $icerigi
 * @property string $ismi
 */
class Alert extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alert';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icerigi'], 'string'],
            [['turu', 'ismi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'turu' => 'Turu',
            'icerigi' => 'Icerigi',
            'ismi' => 'Ismi',
        ];
    }
}
