<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "recentupdates".
 *
 * @property integer $id
 * @property string $timestamp
 * @property string $content
 */
class Recentupdates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'recentupdates';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timestamp'], 'required'],
            [['content'], 'string'],
            [['timestamp'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'timestamp' => 'Timestamp',
            'content' => 'Content',
        ];
    }
}
