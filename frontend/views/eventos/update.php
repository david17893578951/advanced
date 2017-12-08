<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Eventos */

$this->title = 'Actualizar Evento: ' . $model->id_evento;
$this->params['breadcrumbs'][] = ['label' => 'Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_evento, 'url' => ['view', 'id' => $model->id_evento]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="eventos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
