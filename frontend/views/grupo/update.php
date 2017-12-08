<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Grupo */

$this->title = 'Actualizar Grupo: ' . $model->id_grupo;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_grupo, 'url' => ['view', 'id' => $model->id_grupo]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="grupo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
