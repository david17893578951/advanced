<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Miembros */

$this->title = $model->id_miembro;
$this->params['breadcrumbs'][] = ['label' => 'Miembros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="miembros-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_miembro], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a('Delete', ['delete', 'id' => $model->id_miembro], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])
        ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_miembro',
            'id_grupo',
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
            'hoja_de_vida',
                [
                'label' => 'hoja_de_vida',
                'format' => 'raw',
                'value' => Html::a("Descage Aquí Hoja de Vida", "http://" . $_SERVER["HTTP_HOST"] . Yii::$app->request->baseUrl . "/" . $model->hoja_de_vida),
            ],
            //'foto',
            [
                'label' => 'Imagenes',
                'format' => 'raw',
                'value' => Html::img(Yii::$app->request->baseUrl . '/' . $model->foto, ['width' => '500px']),
            ],
            'estado',
        ],
    ])
    ?>

</div>
