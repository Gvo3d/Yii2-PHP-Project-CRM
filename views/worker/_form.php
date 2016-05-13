<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\City;
use app\models\CitySearch;

        
		
/* @var $this yii\web\View */
/* @var $model app\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>
	<?php $query = City::find()->all(); ?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

<?
    $items = ArrayHelper::map($query, 'id', 'cityname');
    $params = [
        'prompt' => 'Выберите город...'
    ];
    echo $form->field($model, 'city')->dropDownList($items,$params);
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
