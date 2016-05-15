<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Worker */
/* @var $form yii\widgets\ActiveForm */

$this->title = 'Create Worker';
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-create">

    <h1><?php echo Html::encode($this->title) ?></h1>
	
    <?php echo $this->render('_form', [
        'model' => $model,
        'adding' => $adding,
		
		
    ]) ?>

</div>
