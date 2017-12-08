<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MiembrosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Miembros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a('Nuevo Miembro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?php
    $gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            
            ['attribute' => 'id_grupo',
            'value' => 'idGrupo.nombre',
            'label' => 'Colectivos'],
        'cedula',
        'nombres',
        'apellidos',
        'pais',
        'provincia',
        'ciudad',
        'parroquia',
        'direccion',
        'referencia_domiciliaria',
        'referencia_personal',
        'nivel_formacion',
        'titulo',
        'grupo_etnico',
        'telefono',
        'email:email',
        'fecha_nacimiento',
        'genero',
        
        'estado',
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
            //'id_miembro',
            [
                'label' => 'Fotografia',
                'format' => 'raw',
                'value' => function($model) {
                    return Html::img(Yii::$app->request->baseUrl . '/' . $model->foto, [
                                'alt' => 'gridview',
                                'style' => 'width:100px;'
                    ]);
                },
            ],
                ['attribute' => 'id_grupo',
                'value' => 'idGrupo.nombre',
                'label' => 'Colectivos'],
            'cedula',
            'nombres',
            'apellidos',
            //'pais',
            //'provincia',
            //'ciudad',
            //'parroquia',
            //'direccion',
            //'referencia_domiciliaria',
//            'referencia_personal',
//            'nivel_formacion',
//            'titulo',
//            'grupo_etnico',
            'telefono',
//            'email:email',
//            'fecha_nacimiento',
//            'genero',
            //'hoja_de_vida',
            //'estado',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>
</div>
