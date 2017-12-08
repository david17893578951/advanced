<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Columna */

$this->title = $model->id_columna;
$this->params['breadcrumbs'][] = ['label' => 'Columnas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columna-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_columna], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_columna], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_columna',
            'autor',
            'detalle:ntext',
            'fecha',
            'telefono',
            'correo',
            'estado',
        ],
    ]) ?>

</div>
