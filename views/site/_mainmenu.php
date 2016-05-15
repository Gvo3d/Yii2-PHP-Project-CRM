<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
 ?>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Manage workers</h2>

                <?php echo Html::a('Workers &raquo;', ['worker/index'], ['class' => 'btn btn-default']) ?>
            </div>
            <div class="col-lg-4">
                <h2>Manage projects</h2>

                <?php echo Html::a('Projects &raquo;', ['project/index'], ['class' => 'btn btn-default']) ?>
            </div>
            <div class="col-lg-4">
                <h2>Manage cities</h2>

                <?php echo Html::a('Cities &raquo;', ['city/index'], ['class' => 'btn btn-default']) ?>
            </div>
			<div class="col-lg-4">
                <h2>Manage roles</h2>

                <?php echo Html::a('Roles &raquo;', ['role/index'], ['class' => 'btn btn-default']) ?>
            </div>
            <div class="col-lg-4">
                <h2>Manage statuses</h2>

                <?php echo Html::a('Statuses &raquo;', ['status/index'], ['class' => 'btn btn-default']) ?>
            </div>
            <div class="col-lg-4">
                <h2>Manage magazine</h2>
                
                <?php echo Html::a('Magazines &raquo;', ['magazine/index'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>

    </div>
