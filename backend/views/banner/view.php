<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Banner */

$this->title = $model->id_banner;
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_banner], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_banner], [
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
            'id_banner',
            'id_unapes',
            //'img',
            [
                'label'=>'Imagenes',
                'format'=>'raw',
                'value'=>Html::img(Yii::$app->request->baseUrl.'/'.$model->img,
                    ['width'=>'500px']),
            ],

            'estado',
        ],
    ]) ?>

</div>
