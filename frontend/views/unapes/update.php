<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Unapes */

$this->title = 'Actualizar Filial: ' . $model->id_unapes;
$this->params['breadcrumbs'][] = ['label' => 'Unapes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_unapes, 'url' => ['view', 'id' => $model->id_unapes]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="unapes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
