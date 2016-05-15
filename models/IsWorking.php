<?php

namespace app\models;

use yii\base\Model;

class IsWorking extends Model
{
    public $toAdd;

    public function rules()
    {
        return [
            [['toAdd'], 'string'],
            [['toAdd'], 'required'],
        ];
    }
}
