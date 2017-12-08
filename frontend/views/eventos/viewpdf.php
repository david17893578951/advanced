<?php

//use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = 'Carnet Tipificación';
?>

<div>
    <h2>HOTEL SAN MIGUEL DE TULCAN</h2>

</div>

<div>
<table>
        <tr align=="center">
            <td>NUMERO DE FACTURA</td>
            <td>FECHA DE FACTURACION</td>
            <td>SUBTOTAL</td>
             <td>IVA</td>
             <td>A PAGAR</td>
        </tr>
        <tr align=="center">
            <td><?= Html::encode($model->id_miembro)?></td>
            <td><?= Html::encode($model->cedula) ?></td>
            <td><?= Html::encode($model->apellidos) ?></td>
			<td><?= Html::encode($model->nombres) ?></td>
			<td><?= Html::encode($model->fecha_registro) ?></td>
			<td><?= Html::encode($model->correo) ?></td>

   
        </tr>
        
    </table>

</div>