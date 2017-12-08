<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "unapes".
 *
 * @property integer $id_unapes
 * @property string $nombre
 * @property string $detalle
 *
 * @property Banner[] $banners
 * @property Directiva[] $directivas
 * @property Eventos[] $eventos
 * @property Grupo[] $grupos
 */
class Unapes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unapes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detalle'], 'string'],
            [['nombre'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_unapes' => 'Id Unapes',
            'nombre' => 'Nombre',
            'detalle' => 'Detalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanners()
    {
        return $this->hasMany(Banner::className(), ['id_unapes' => 'id_unapes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectivas()
    {
        return $this->hasMany(Directiva::className(), ['id_unapes' => 'id_unapes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventos()
    {
        return $this->hasMany(Eventos::className(), ['id_unapes' => 'id_unapes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGrupos()
    {
        return $this->hasMany(Grupo::className(), ['id_unapes' => 'id_unapes']);
    }
}
