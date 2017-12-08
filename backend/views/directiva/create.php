<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Directiva */

$this->title = 'Create Directiva';
$this->params['breadcrumbs'][] = ['label' => 'Directivas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directiva-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
