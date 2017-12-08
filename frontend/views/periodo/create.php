<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Periodo */

$this->title = 'Nuevo Periodo';
$this->params['breadcrumbs'][] = ['label' => 'Periodos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periodo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
