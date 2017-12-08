<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Grupo;
use kartik\form\ActiveForm;
use kartik\file\FileInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Galeria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="galeria-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <?=
    $form->field($model, 'id_grupo')->dropDownList(
            ArrayHelper::map(Grupo::find()->all(), 'id_grupo', 'nombre'), ['prompt' => 'Seleccione Grupo']
    )
    ?>

    <?=
    $form->field($model, 'img1')->widget(FileInput::classname(), [
        'options' => ['accept' => 'img1/*'],
    ]);
    ?>
    <?=
    $form->field($model, 'img2')->widget(FileInput::classname(), [
        'options' => ['accept' => 'img2/*'],
    ]);
    ?>
    <?=
    $form->field($model, 'img3')->widget(FileInput::classname(), [
        'options' => ['accept' => 'img3/*'],
    ]);
    ?>

    <?=
    $form->field($model, 'img4')->widget(FileInput::classname(), [
        'options' => ['accept' => 'img4/*'],
    ]);
    ?>
    <?=
    $form->field($model, 'img5')->widget(FileInput::classname(), [
        'options' => ['accept' => 'img5/*'],
    ]);
    ?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
