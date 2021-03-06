<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

$this->title = $name;
?>

<h1><?= \yii\helpers\Html::encode( $this->title ); ?></h1>

<div class="alert alert-danger">
    <?= nl2br( \yii\helpers\Html::encode( $message ) ); ?>
</div>

<p>The above error occurred while the Web server was processing your request.</p>

<p>Please contact us if you think this is a server error. Thank you.</p>