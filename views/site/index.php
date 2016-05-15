<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use app\models\Recentupdates;

$this->title = 'Project CRM';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Project CRM</h1>

    <?php if (!Yii::$app->user->isGuest) {
    echo $this->render('_mainmenu');}
    ?>
    <br>
    <br>
    <?php foreach ($recentupdates as $recentupdate): ?>
    <li>
        <?php echo Html::encode("{$recentupdate->id}") ?>&nbsp&nbsp&nbsp
        <?php echo Html::encode("{$recentupdate->timestamp}") ?>&nbsp&nbsp&nbsp
        <?php echo Html::encode("{$recentupdate->content}") ?>
    </li>
<?php endforeach; ?>
    
    <?= $isGuest ?>
</div>
