<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "galeria".
 *
 * @property integer $id_galeria
 * @property integer $id_grupo
 * @property string $img1
 * @property string $img2
 * @property string $img3
 * @property string $img4
 * @property string $img5
 *
 * @property Grupo $idGrupo
 */
class Galeria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'galeria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
         return [
            [['id_grupo'], 'integer'],
            [['img1', 'img2', 'img3', 'img4', 'img5'], 'string', 'max' => 100],
            [['img1', 'img2', 'img3', 'img4', 'img5'], 'safe'/*,'on' => 'search'*/],
            [['img1', 'img2', 'img3', 'img4', 'img5'], 'file', 'extensions' =>'jpg,png'/*,'allowEmpty'=>true,'on'=>'insert,update'*/],
            
            [['id_grupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['id_grupo' => 'id_grupo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_galeria' => 'Id Galeria',
            'id_grupo' => 'Id Grupo',
            'img1' => 'Img1',
            'img2' => 'Img2',
            'img3' => 'Img3',
            'img4' => 'Img4',
            'img5' => 'Img5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdGrupo()
    {
        return $this->hasOne(Grupo::className(), ['id_grupo' => 'id_grupo']);
    }
}
