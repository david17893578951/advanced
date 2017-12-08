<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Unapes;

use kartik\form\ActiveForm;
use kartik\file\FileInput;

use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Eventos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="eventos-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

     <?=
    $form->field($model, 'id_unapes')->dropDownList(
            ArrayHelper::map(Unapes::find()->all(), 'id_unapes', 'nombre'), ['prompt' => 'Seleccione Unape']
    )
    ?>

    <?= $form->field($model, 'evento')->textInput(['maxlength' => true]) ?>

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
   
<?=$form->field($model, 'logo')->widget(FileInput::classname(), [
    'options' => ['accept' => 'logo/*'],
]);?>
    <?= $form->field($model, 'estado')->dropDownList(['S' => 'S', 'N' => 'N',], ['prompt' => 'Estado...']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
