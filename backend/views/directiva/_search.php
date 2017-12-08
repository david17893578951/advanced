<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\DirectivaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directiva-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_directiva') ?>

    <?= $form->field($model, 'id_unapes') ?>

    <?= $form->field($model, 'id_cargo') ?>

    <?= $form->field($model, 'id_miembro') ?>

    <?= $form->field($model, 'id_periodo') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
