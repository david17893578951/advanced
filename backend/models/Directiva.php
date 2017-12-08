<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "directiva".
 *
 * @property integer $id_directiva
 * @property integer $id_unapes
 * @property integer $id_cargo
 * @property integer $id_miembro
 * @property integer $id_periodo
 *
 * @property Unapes $idUnapes
 * @property Cargos $idCargo
 * @property Miembros $idMiembro
 * @property Periodo $idPeriodo
 */
class Directiva extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directiva';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unapes', 'id_cargo', 'id_miembro', 'id_periodo'], 'integer'],
            [['id_unapes'], 'exist', 'skipOnError' => true, 'targetClass' => Unapes::className(), 'targetAttribute' => ['id_unapes' => 'id_unapes']],
            [['id_cargo'], 'exist', 'skipOnError' => true, 'targetClass' => Cargos::className(), 'targetAttribute' => ['id_cargo' => 'id_cargo']],
            [['id_miembro'], 'exist', 'skipOnError' => true, 'targetClass' => Miembros::className(), 'targetAttribute' => ['id_miembro' => 'id_miembro']],
            [['id_periodo'], 'exist', 'skipOnError' => true, 'targetClass' => Periodo::className(), 'targetAttribute' => ['id_periodo' => 'id_periodo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_directiva' => 'Id Directiva',
            'id_unapes' => 'Id Unapes',
            'id_cargo' => 'Id Cargo',
            'id_miembro' => 'Id Miembro',
            'id_periodo' => 'Id Periodo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUnapes()
    {
        return $this->hasOne(Unapes::className(), ['id_unapes' => 'id_unapes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCargo()
    {
        return $this->hasOne(Cargos::className(), ['id_cargo' => 'id_cargo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMiembro()
    {
        return $this->hasOne(Miembros::className(), ['id_miembro' => 'id_miembro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPeriodo()
    {
        return $this->hasOne(Periodo::className(), ['id_periodo' => 'id_periodo']);
    }
}
