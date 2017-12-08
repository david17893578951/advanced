<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GaleriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galerias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="galeria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Galeria', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
            'id_galeria',
                ['attribute' => 'id_grupo',
                'value' => 'idGrupo.nombre',
                'label' => 'Colectivos'],
            //'img1',
            [
                'label' => 'Imagen 1',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/' . $model->img1, [
                                'alt' => 'gridview',
                                'style' => 'width:100px;'
                    ]);
                },
            ],
            //'img2',
            [
                'label' => 'Imagen 2',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/' . $model->img2, [
                                'alt' => 'gridview',
                                'style' => 'width:100px;'
                    ]);
                },
            ],
            //'img3',
                [
                'label' => 'Imagen 3',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/' . $model->img3, [
                                'alt' => 'gridview',
                                'style' => 'width:100px;'
                    ]);
                },
            ],
            // 'img4',
               [
                'label' => 'Imagen 4',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/' . $model->img4, [
                                'alt' => 'gridview',
                                'style' => 'width:100px;'
                    ]);
                },
            ],
            // 'img5',
                           [
                'label' => 'Imagen 5',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/' . $model->img5, [
                                'alt' => 'gridview',
                                'style' => 'width:100px;'
                    ]);
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
