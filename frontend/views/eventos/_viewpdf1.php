
<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reporte';
?>


<body>
    <div class=" eventos-index ">

        <h1><?= Html::encode($this->title) ?></h1>
        <?=
        GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                    [
                    'label' => 'evento',
                    'value' => 'evento',
                ],
                
            ],
        ]);
        ?>
    </div>
