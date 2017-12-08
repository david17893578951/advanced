<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\UploadedFile;
/* @var $this yii\web\View */
/* @var $model backend\models\Galeria */

$this->title = $model->id_galeria;
$this->params['breadcrumbs'][] = ['label' => 'Galerias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_galeria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_galeria], [
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
            'id_galeria',
            'id_grupo',
            
            [
                'label'=>'Imagen 1',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->img1,
                    ['width'=>'500px']),
            ],
            [
                'label'=>'Imagen 2',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->img2,
                    ['width'=>'500px']),
            ],
            [
                'label'=>'Imagen 3',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->img3,
                    ['width'=>'500px']),
            ],
            [
                'label'=>'Imagen 4',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->img4,
                    ['width'=>'500px']),
            ],
            [
                'label'=>'Imagen 5',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->img5,
                    ['width'=>'500px']),
            ],
           
        ],
    ]) ?>

</div>
