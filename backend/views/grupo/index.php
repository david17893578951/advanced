<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GrupoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grupos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="grupo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Grupo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_grupo',
             ['attribute' => 'id_unapes',
                'value' => 'idUnapes.nombre',
                'label'=>'Filiales'],
            'nombre',
            //'logo',
            [
                'label' => 'Logo',
                'format' => 'raw',
                'value' => function($model){
                    return Html::img(Yii::$app->request->baseUrl.'/'.$model->logo,[
                        'alt'=>'gridview',
                        'style' => 'width:100px;'
                    ]);
                },
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
