<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\GrupoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Colectivos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nuevo Colectivo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    $gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id_unapes',
            'value' => 'idUnapes.nombre',
            'label' => 'Filiales'],
        'nombre',
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
            ['class' => 'yii\grid\SerialColumn'],
    ];
    echo ExportMenu::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => $gridColumns,
    ]);
    ?>





<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
        //'id_grupo',
        ['attribute' => 'id_unapes',
            'value' => 'idUnapes.nombre',
            'label' => 'Filiales'],
        'nombre',
        //'logo',
        [
            'label' => 'Logo',
            'format' => 'raw',
            'value' => function($model) {
                return Html::img(Yii::$app->request->baseUrl . '/' . $model->logo, [
                            'alt' => 'gridview',
                            'style' => 'width:100px;'
                ]);
            },
        ],
        'responsable',
        'genero_artistico',
        'estilo_artistico',
        'trayectoria:ntext',
        //'youtube',
        //'facebook',
        //'twitter',
        //'telefonos',
        'precio',
        'direccion',
            ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?>
</div>
