<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Grupo;
//use kartik\date\DatePicker;
//use kartik\widgets\ActiveForm;
//use kartik\daterange\DateRangePicker;
use kartik\form\ActiveForm;
use dosamigos\datepicker\DatePicker;
//use kartik\daterange\DateRangePicker;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model backend\models\Miembros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="miembros-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?=
    $form->field($model, 'id_grupo')->dropDownList(
            ArrayHelper::map(Grupo::find()->all(), 'id_grupo', 'nombre'), ['prompt' => 'Seleccione Grupo']
    )
    ?>

    <?= $form->field($model, 'cedula')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellidos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pais')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'provincia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ciudad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parroquia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencia_domiciliaria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencia_personal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nivel_formacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grupo_etnico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'fecha_nacimiento')->widget(
            DatePicker::className(), [
        'inline' => false,
       
                'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-m-d',
                    
            'singleDatePicker'=>FALSE,
            'showDropdowns'=>false,
        ],
    ]);
    ?>


    <?= $form->field($model, 'genero')->textInput(['maxlength' => true]) ?>

   <?=
    $form->field($model, 'hoja_de_vida')->widget(FileInput::classname(), [
        'options' => ['accept' => 'hoja_de_vida/*'],
    ]);
    ?>
    <?=
    $form->field($model, 'foto')->widget(FileInput::classname(), [
        'options' => ['accept' => 'foto/*'],
    ]);
    ?>
    <?= $form->field($model, 'estado')->dropDownList(['S' => 'S', 'N' => 'N',], ['prompt' => 'Estado...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
