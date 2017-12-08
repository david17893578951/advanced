<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "eventos".
 *
 * @property integer $id_evento
 * @property integer $id_unapes
 * @property string $evento
 * @property string $detalle
 * @property string $fecha
 * @property string $logo
 * @property string $estado
 *
 * @property Unapes $idUnapes
 */
class Eventos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eventos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
         return [
            [['id_unapes'], 'integer'],
            [['detalle'], 'string'],
            [['fecha'], 'safe'],
            [['evento'], 'string', 'max' => 50],
            [['logo'], 'string', 'max' => 100],
            [['logo'], 'safe'/*,'on' => 'search'*/],
            [['logo'], 'file', 'extensions' =>'jpg,png'/*,'allowEmpty'=>true,'on'=>'insert,update'*/],
            [['estado'], 'string', 'max' => 20],
            [['id_unapes'], 'exist', 'skipOnError' => true, 'targetClass' => Unapes::className(), 'targetAttribute' => ['id_unapes' => 'id_unapes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_evento' => 'Id Evento',
            'id_unapes' => 'Id Unapes',
            'evento' => 'Evento',
            'detalle' => 'Detalle',
            'fecha' => 'Fecha',
            'logo' => 'Logo',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUnapes()
    {
        return $this->hasOne(Unapes::className(), ['id_unapes' => 'id_unapes']);
    }
}
