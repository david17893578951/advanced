<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Unapes;
use kartik\form\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Grupo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="grupo-form">

   <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?=
    $form->field($model, 'id_unapes')->dropDownList(
            ArrayHelper::map(Unapes::find()->all(), 'id_unapes', 'nombre'), ['prompt' => 'Seleccione Unape']
    )
    ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

 <?=$form->field($model, 'logo')->widget(FileInput::classname(), [
    'options' => ['accept' => 'logo/*'],
]);?>
    <?= $form->field($model, 'responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero_artistico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estilo_artistico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trayectoria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefonos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
