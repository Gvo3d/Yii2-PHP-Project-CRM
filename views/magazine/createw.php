<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Magazine */

$this->title = 'Create Magazine';
$this->params['breadcrumbs'][] = ['label' => 'Magazines', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="magazine-create">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', [
        'model' => $model,
        'worker_id' => $worker_id,
    ]) ?>

</div>
