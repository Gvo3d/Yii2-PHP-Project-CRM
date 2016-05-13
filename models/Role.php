<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id
 * @property string $roleName
 *
 * @property Magazine[] $magazines
 */
class Role extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'role';
    }

    public function rules()
    {
        return [
            [['roleName'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Role ID',
            'roleName' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMagazines()
    {
        return $this->hasMany(Magazine::className(), ['role_id' => 'id']);
    }
}
