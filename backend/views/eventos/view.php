<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Eventos */

$this->title = $model->id_evento;
$this->params['breadcrumbs'][] = ['label' => 'Eventos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eventos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_evento], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_evento], [
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
            'id_evento',
            'id_unapes',
            'evento',
            'detalle:ntext',
            'fecha',
            //'logo',
            [
                'label'=>'Logo',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->logo,
                    ['width'=>'500px']),
            ],
            'estado',
        ],
    ]) ?>

</div>
