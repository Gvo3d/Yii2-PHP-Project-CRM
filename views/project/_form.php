<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Status;
use app\models\StatusSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $query = Status::find()->all(); ?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'projectName')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
	
	<?php $items = ArrayHelper::map($query, 'id', 'statusName');
    $params = [
        'prompt' => 'Выберите состояние проекта...'
    ];
    echo $form->field($model, 'status')->dropDownList($items,$params);?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
