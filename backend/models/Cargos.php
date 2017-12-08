<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cargos".
 *
 * @property integer $id_cargo
 * @property string $cargo
 * @property string $detalle
 *
 * @property Directiva[] $directivas
 */
class Cargos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cargos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cargo'], 'string', 'max' => 50],
            [['detalle'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_cargo' => 'Id Cargo',
            'cargo' => 'Cargo',
            'detalle' => 'Detalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectivas()
    {
        return $this->hasMany(Directiva::className(), ['id_cargo' => 'id_cargo']);
    }
}
