<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Unapes */

$this->title = 'Nueva Filial';
$this->params['breadcrumbs'][] = ['label' => 'Unapes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unapes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
