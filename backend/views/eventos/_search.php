<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EventosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_evento') ?>

    <?= $form->field($model, 'id_unapes') ?>

    <?= $form->field($model, 'evento') ?>

    <?= $form->field($model, 'detalle') ?>

    <?= $form->field($model, 'fecha') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
