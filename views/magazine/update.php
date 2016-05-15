<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Magazine */

$this->title = 'Update Magazine: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Magazines', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="magazine-update">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
