<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\City;
use app\models\CitySearch;
use app\models\IsWorking;

        
		
/* @var $this yii\web\View */
/* @var $model app\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>
	<?php $query = City::find()->all(); ?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php
    $items = ArrayHelper::map($query, 'id', 'cityname');
    $params = [
        'prompt' => 'Выберите город...'
    ];
    echo $form->field($model, 'city')->dropDownList($items,$params); ?>
    
    <?php echo $form->field($adding, 'toAdd')->checkbox(['value' => '$adding->toAdd', 'check' => '12312412', 'uncheck' => '0', 'label' => 'Add to existing project']) ?>
    
    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
