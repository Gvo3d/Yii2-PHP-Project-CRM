<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Worker;
use app\models\WorkerSearch;
use app\models\Project;
use app\models\ProjectSearch;
use app\models\Role;
use app\models\RoleSearch;

/* @var $this yii\web\View */
/* @var $model app\models\Magazine */
/* @var $form yii\widgets\ActiveForm */
?>

<?php 
	$workerquery = Worker::find()->all(); 
	$projectquery = Project::find()->all(); 
	$rolequery = Role::find()->all(); ?>

<div class="magazine-form">

    <?php $form = ActiveForm::begin(); ?>

	<? $itemsworker = ArrayHelper::map($workerquery, 'id', 'name');
    $paramsworker = [
        'prompt' => 'Выберите работника...'
    ];
    echo $form->field($model, 'worker_id')->dropDownList($itemsworker,$paramsworker); ?>

	<? $itemsproject = ArrayHelper::map($projectquery, 'id', 'projectName');
    $paramsproject = [
        'prompt' => 'Выберите проект...'
    ];
    echo $form->field($model, 'project_id')->dropDownList($itemsproject,$paramsproject); ?>

	<? $itemsrole = ArrayHelper::map($rolequery, 'id', 'roleName');
    $paramsrole = [
        'prompt' => 'Выберите роль...'
    ];
    echo $form->field($model, 'role_id')->dropDownList($itemsrole,$paramsrole); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
