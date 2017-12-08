<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Columna */

$this->title = 'Update Columna: ' . $model->id_columna;
$this->params['breadcrumbs'][] = ['label' => 'Columnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_columna, 'url' => ['view', 'id' => $model->id_columna]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="columna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
