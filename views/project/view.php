<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use app\models\Magazine;
use app\models\MagazineSearch;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = $model->projectName;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?php echo Html::encode($this->title) ?></h1>

    <p>
        <?php echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'projectName',
            'description',
            'statusp.statusName',
        ],
    ]) ?>
    
    <br>
    <b><p>Active workers:<p></b>
    
    <?php echo GridView::widget([
        'dataProvider' => $magazines,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'worker.name',
            'attribute' => 'role.roleName',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
