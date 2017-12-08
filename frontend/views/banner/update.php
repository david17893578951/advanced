<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */

$this->title = 'Actualizar Banner: ' . $model->id_banner;
$this->params['breadcrumbs'][] = ['label' => 'Banner', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_banner, 'url' => ['view', 'id' => $model->id_banner]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="banner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
