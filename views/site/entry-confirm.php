<?php
use yii\helpers\Html;
?>

<ul>
    <li><label for="">Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label for="">Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
