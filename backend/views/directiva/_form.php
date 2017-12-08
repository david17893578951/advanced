<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Unapes;
use backend\models\Cargos;
use backend\models\Miembros;
use backend\models\Periodo;
/* @var $this yii\web\View */
/* @var $model backend\models\Directiva */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directiva-form">

    <?php $form = ActiveForm::begin(); ?>

   <?=
    $form->field($model, 'id_unapes')->dropDownList(
            ArrayHelper::map(Unapes::find()->all(), 'id_unapes', 'nombre'), ['prompt' => 'Seleccione Unape']
    )
    ?>

    <?=
    $form->field($model, 'id_cargo')->dropDownList(
            ArrayHelper::map(Cargos::find()->all(), 'id_cargo', 'cargo'), ['prompt' => 'Seleccione Cargo']
    )
    ?>


    <?=
    $form->field($model, 'id_miembro')->dropDownList(
            ArrayHelper::map(Miembros::find()->all(), 'id_miembro', 'apellidos'), ['prompt' => 'Seleccione Apellido']
    )
    ?>

    <?=
    $form->field($model, 'id_periodo')->dropDownList(
            ArrayHelper::map(Periodo::find()->all(), 'id_periodo', 'fecha_inicio'), ['prompt' => 'Seleccione Inicio de Periodo']
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
