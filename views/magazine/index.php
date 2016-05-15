<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MagazineSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Magazines';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="magazine-index">

    <h1><?php echo Html::encode($this->title) ?></h1>


    <p>
        <?php echo Html::a('Create Magazine', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'project_id',
            'project.projectName',
            'worker_id',
            'worker.name',
            'role_id',
            'role.roleName',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
