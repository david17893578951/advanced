<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Periodo */

$this->title = 'Update Periodo: ' . $model->id_periodo;
$this->params['breadcrumbs'][] = ['label' => 'Periodos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_periodo, 'url' => ['view', 'id' => $model->id_periodo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="periodo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
