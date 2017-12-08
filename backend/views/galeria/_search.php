<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GaleriaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_galeria') ?>

    <?= $form->field($model, 'id_grupo') ?>

    <?= $form->field($model, 'img1') ?>

    <?= $form->field($model, 'img2') ?>

    <?= $form->field($model, 'img3') ?>

    <?php // echo $form->field($model, 'img4') ?>

    <?php // echo $form->field($model, 'img5') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
