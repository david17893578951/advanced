<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Directiva */

$this->title = 'Actualizar Directiva: ' . $model->id_directiva;
$this->params['breadcrumbs'][] = ['label' => 'Directivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_directiva, 'url' => ['view', 'id' => $model->id_directiva]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="directiva-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
