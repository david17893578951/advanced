<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Miembros */

$this->title = 'Nuevo Miembro';
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
