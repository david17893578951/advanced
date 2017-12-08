<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ColumnaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Columnas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columna-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Nueva Columna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_columna',
            'autor',
            'detalle:ntext',
            'fecha',
            'telefono',
            // 'correo',
            // 'estado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
