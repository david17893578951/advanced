<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Periodo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periodo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=
    $form->field($model, 'fecha_inicio')->widget(
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

    <?=
    $form->field($model, 'fecha_fin')->widget(
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
    <?= $form->field($model, 'estado')->dropDownList(['S' => 'S', 'N' => 'N',], ['prompt' => 'Estado...']) ?>

    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
