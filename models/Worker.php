<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property integer $city
 *
 * @property Magazine[] $magazines
 * @property City $city0
 */
class Worker extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'worker';
    }
	
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['city'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['city'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Worker ID',
            'name' => 'Worker',
            'email' => 'E-mail',
            'city' => 'City',
            'cityname' => 'City Name',
        ];
    }

    public function getMagazines()
    {
        return $this->hasMany(Magazine::className(), ['worker_id' => 'id']);
    }

    public function getCityname()
    {
        return $this->hasOne(City::className(), ['id' => 'city']);
    }
}
