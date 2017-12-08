<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Columna */

$this->title = 'Nueva Columna';
$this->params['breadcrumbs'][] = ['label' => 'Columnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columna-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
