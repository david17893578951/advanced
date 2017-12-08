<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Directiva */

$this->title = $model->id_directiva;
$this->params['breadcrumbs'][] = ['label' => 'Directivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiva-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_directiva], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_directiva], [
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
            'id_directiva',
            'id_unapes',
            'id_cargo',
            'id_miembro',
            'id_periodo',
        ],
    ]) ?>

</div>
