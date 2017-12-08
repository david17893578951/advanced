<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\MiembrosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miembros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_miembro') ?>

    <?= $form->field($model, 'id_grupo') ?>

    <?= $form->field($model, 'cedula') ?>

    <?= $form->field($model, 'nombres') ?>

    <?= $form->field($model, 'apellidos') ?>

    <?php // echo $form->field($model, 'pais') ?>

    <?php // echo $form->field($model, 'provincia') ?>

    <?php // echo $form->field($model, 'ciudad') ?>

    <?php // echo $form->field($model, 'parroquia') ?>

    <?php // echo $form->field($model, 'direccion') ?>

    <?php // echo $form->field($model, 'referencia_domiciliaria') ?>

    <?php // echo $form->field($model, 'referencia_personal') ?>

    <?php // echo $form->field($model, 'nivel_formacion') ?>

    <?php // echo $form->field($model, 'titulo') ?>

    <?php // echo $form->field($model, 'grupo_etnico') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'hoja_de_vida') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
