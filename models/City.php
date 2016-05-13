<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $cityname
 *
 * @property Worker[] $workers
 */
class City extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'city';
    }

    public function rules()
    {
        return [
            [['cityname'], 'required'],
            [['cityname'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'City Id',
            'cityname' => 'City Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['city' => 'id']);
    }
}
