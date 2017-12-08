<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property integer $id_grupo
 * @property integer $id_unapes
 * @property string $nombre
 * @property string $logo
 * @property string $responsable
 * @property string $genero_artistico
 * @property string $estilo_artistico
 * @property string $trayectoria
 * @property string $youtube
 * @property string $facebook
 * @property string $twitter
 * @property string $telefonos
 * @property string $precio
 * @property string $direccion
 *
 * @property Galeria[] $galerias
 * @property Unapes $idUnapes
 * @property Miembros[] $miembros
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unapes'], 'integer'],
            [['trayectoria'], 'string'],
            [['precio'], 'number'],
            [['nombre', 'responsable', 'genero_artistico', 'estilo_artistico'], 'string', 'max' => 50],
            [['logo', 'youtube', 'facebook', 'twitter', 'direccion'], 'string', 'max' => 100],
            [['logo'], 'safe'/*,'on' => 'search'*/],
            [['logo'], 'file', 'extensions' =>'jpg,png'/*,'allowEmpty'=>true,'on'=>'insert,update'*/],
            [['telefonos'], 'string', 'max' => 15],
            [['id_unapes'], 'exist', 'skipOnError' => true, 'targetClass' => Unapes::className(), 'targetAttribute' => ['id_unapes' => 'id_unapes']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_grupo' => 'Id Grupo',
            'id_unapes' => 'Id Unapes',
            'nombre' => 'Nombre',
            'logo' => 'Logo',
            'responsable' => 'Responsable',
            'genero_artistico' => 'Genero Artistico',
            'estilo_artistico' => 'Estilo Artistico',
            'trayectoria' => 'Trayectoria',
            'youtube' => 'Youtube',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'telefonos' => 'Telefonos',
            'precio' => 'Precio',
            'direccion' => 'Direccion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGalerias()
    {
        return $this->hasMany(Galeria::className(), ['id_grupo' => 'id_grupo']);
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
    public function getMiembros()
    {
        return $this->hasMany(Miembros::className(), ['id_grupo' => 'id_grupo']);
    }
}
