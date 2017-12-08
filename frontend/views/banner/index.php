<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banner';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banner-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Banner', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_banner',
            ['attribute' => 'id_unapes',
                'value' => 'idUnapes.nombre',
                'label' => 'Filiales'],
            //'img',
            [
                'label' => 'Imagen',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img(Yii::$app->request->baseUrl.'/'.$model->img,[
                        'alt'=>'gridview',
                        'style' => 'width:500px;'
                    ]);
                },
            ],

            'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
