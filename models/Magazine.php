<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "magazine".
 *
 * @property integer $id
 * @property integer $worker_id
 * @property integer $project_id
 * @property integer $role_id
 *
 * @property Worker $worker
 * @property Project $project
 * @property Role $role
 */
class Magazine extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'magazine';
    }

    public function rules()
    {
        return [
            [['worker_id', 'project_id', 'role_id'], 'integer'],
            [['worker_id'], 'exist', 'skipOnError' => true, 'targetClass' => Worker::className(), 'targetAttribute' => ['worker_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker ID',
            'project_id' => 'Project ID',
            'role_id' => 'Role ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }

    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }
}
