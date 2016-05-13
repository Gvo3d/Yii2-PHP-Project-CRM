<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id
 * @property string $statusName
 */
class Status extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'status';
    }

    public function rules()
    {
        return [
            [['statusName'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Status ID',
            'statusName' => 'Status',
        ];
    }
}
