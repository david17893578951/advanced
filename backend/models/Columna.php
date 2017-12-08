<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "columna".
 *
 * @property integer $id_columna
 * @property string $autor
 * @property string $detalle
 * @property string $fecha
 * @property string $telefono
 * @property string $correo
 * @property string $estado
 */
class Columna extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'columna';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detalle'], 'string'],
            [['fecha'], 'safe'],
            [['autor', 'correo'], 'string', 'max' => 50],
            [['telefono'], 'string', 'max' => 15],
            [['estado'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_columna' => 'Id Columna',
            'autor' => 'Autor',
            'detalle' => 'Detalle',
            'fecha' => 'Fecha',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'estado' => 'Estado',
        ];
    }
}
