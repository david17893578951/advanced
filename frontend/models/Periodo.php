<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "periodo".
 *
 * @property integer $id_periodo
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $estado
 *
 * @property Directiva[] $directivas
 */
class Periodo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periodo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['estado'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_periodo' => 'Id Periodo',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectivas()
    {
        return $this->hasMany(Directiva::className(), ['id_periodo' => 'id_periodo']);
    }
}
