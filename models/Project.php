<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property integer $id
 * @property string $projectName
 * @property string $description
 * @property integer $status
 *
 * @property Magazine[] $magazines
 */
class Project extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'project';
    }

    public function rules()
    {
        return [
            [['projectName', 'description'], 'required'],
            [['status'], 'integer'],
            [['projectName', 'description'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Project ID',
            'projectName' => 'Project Name',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMagazines()
    {
        return $this->hasMany(Magazine::className(), ['project_id' => 'id']);
    }
	
	public function getStatusp()
    {
        return $this->hasOne(Status::className(), ['id' => 'status']);
    }
}
