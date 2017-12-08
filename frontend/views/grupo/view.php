<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Grupo */

$this->title = $model->id_grupo;
$this->params['breadcrumbs'][] = ['label' => 'Grupos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_grupo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id_grupo], [
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
            'id_grupo',
            //'id_unapes',
            'idUnapes.nombre',
            'nombre',
            //'logo',
            [
                'label'=>'Imagenes',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->logo,
                    ['width'=>'500px']),
            ],
            'responsable',
            'genero_artistico',
            'estilo_artistico',
            'trayectoria:ntext',
            'youtube',
            'facebook',
            'twitter',
            'telefonos',
            'precio',
            'direccion',
        ],
    ]) ?>

</div>
