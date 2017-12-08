<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DirectivaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Directivas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiva-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Directiva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_directiva',
            // 'idUnapes.nombre',
            ['attribute' => 'id_unapes',
                'value' => 'idUnapes.nombre',
                'label'=>'Filiales'],
            //'idCargo.nombre',
            ['attribute' => 'id_cargo',
                'value' => 'idCargo.cargo',
            'label'=>'Cargos'],
            // 'idMiembro.apellidos',
            ['attribute' => 'id_miembro',
                'value' => 'idMiembro.apellidos'],
            // 'idPeriodo.fecha_inicio',
            ['attribute' => 'id_periodo',
               'value' => 'idPeriodo.fecha_inicio'],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
