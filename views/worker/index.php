<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workers';
$this->params['breadcrumbs'][] = $this->title;
?>
    
<div class="worker-index">

    <h1><?php echo Html::encode($this->title) ?></h1>

    
    <p>
        <?php echo Html::a('Create Worker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'email',
			'city',
            'cityname.cityname',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
