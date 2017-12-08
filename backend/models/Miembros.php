<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "miembros".
 *
 * @property integer $id_miembro
 * @property integer $id_grupo
 * @property string $cedula
 * @property string $nombres
 * @property string $apellidos
 * @property string $pais
 * @property string $provincia
 * @property string $ciudad
 * @property string $parroquia
 * @property string $direccion
 * @property string $referencia_domiciliaria
 * @property string $referencia_personal
 * @property string $nivel_formacion
 * @property string $titulo
 * @property string $grupo_etnico
 * @property string $telefono
 * @property string $email
 * @property string $fecha_nacimiento
 * @property string $genero
 * @property string $hoja_de_vida
 * @property string $foto
 * @property string $estado
 *
 * @property Directiva[] $directivas
 * @property Grupo $idGrupo
 */
class Miembros extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miembros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_grupo'], 'integer'],
            [['fecha_nacimiento'], 'safe'],
            [['cedula', 'telefono'], 'string', 'max' => 15],
            [['nombres', 'apellidos', 'pais', 'provincia', 'ciudad', 'parroquia', 'nivel_formacion', 'grupo_etnico', 'email'], 'string', 'max' => 50],
            [['direccion', 'referencia_domiciliaria', 'referencia_personal'], 'string', 'max' => 150],
            [['titulo', 'hoja_de_vida', 'foto'], 'string', 'max' => 100],
            [['foto', 'hoja_de_vida'], 'safe'/*,'on' => 'search'*/],
            [['foto'], 'file', 'extensions' =>'jpg,png'/*,'allowEmpty'=>true,'on'=>'insert,update'*/],
            [['hoja_de_vida'], 'file', 'extensions' =>'pdf,docx'],
            
            [['genero', 'estado'], 'string', 'max' => 20],
            [['id_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['id_grupo' => 'id_grupo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_miembro' => 'Id Miembro',
            'id_grupo' => 'Id Grupo',
            'cedula' => 'Cedula',
            'nombres' => 'Nombres',
            'apellidos' => 'Apellidos',
            'pais' => 'Pais',
            'provincia' => 'Provincia',
            'ciudad' => 'Ciudad',
            'parroquia' => 'Parroquia',
            'direccion' => 'Direccion',
            'referencia_domiciliaria' => 'Referencia Domiciliaria',
            'referencia_personal' => 'Referencia Personal',
            'nivel_formacion' => 'Nivel Formacion',
            'titulo' => 'Titulo',
            'grupo_etnico' => 'Grupo Etnico',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'genero' => 'Genero',
            'hoja_de_vida' => 'Hoja De Vida',
            'foto' => 'Fotografia',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDirectivas()
    {
        return $this->hasMany(Directiva::className(), ['id_miembro' => 'id_miembro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGrupo()
    {
        return $this->hasOne(Grupo::className(), ['id_grupo' => 'id_grupo']);
    }
}
