<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Columna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="columna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detalle')->textarea(['rows' => 6]) ?>

  
    <?=
    $form->field($model, 'fecha')->widget(
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
    <?= $form->field($model, 'telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'correo')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'estado')->dropDownList(['S' => 'S', 'N' => 'N',], ['prompt' => 'Estado...']) ?>

    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
