<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Unapes;
use kartik\form\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?=
    $form->field($model, 'id_unapes')->dropDownList(
            ArrayHelper::map(Unapes::find()->all(), 'id_unapes', 'nombre'), ['prompt' => 'Seleccione Unape']
    )
    ?>

    <?=
    $form->field($model, 'img')->widget(FileInput::classname(), [
        'options' => ['accept' => 'img/*'],
    ]);
    ?>


    <?= $form->field($model, 'estado')->dropDownList(['S' => 'S', 'N' => 'N',], ['prompt' => 'Estado...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
