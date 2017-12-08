<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Miembros */

$this->title = 'Update Miembros: ' . $model->id_miembro;
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_miembro, 'url' => ['view', 'id' => $model->id_miembro]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="miembros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
