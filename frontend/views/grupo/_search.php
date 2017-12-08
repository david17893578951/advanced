<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\GrupoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_grupo') ?>

    <?= $form->field($model, 'id_unapes') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'responsable') ?>

    <?php // echo $form->field($model, 'genero_artistico') ?>

    <?php // echo $form->field($model, 'estilo_artistico') ?>

    <?php // echo $form->field($model, 'trayectoria') ?>

    <?php // echo $form->field($model, 'youtube') ?>

    <?php // echo $form->field($model, 'facebook') ?>

    <?php // echo $form->field($model, 'twitter') ?>

    <?php // echo $form->field($model, 'telefonos') ?>

    <?php // echo $form->field($model, 'precio') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
