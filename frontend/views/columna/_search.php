<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ColumnaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="columna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_columna') ?>

    <?= $form->field($model, 'autor') ?>

    <?= $form->field($model, 'detalle') ?>

    <?= $form->field($model, 'fecha') ?>

    <?= $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'correo') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
