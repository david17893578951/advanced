<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id_banner
 * @property integer $id_unapes
 * @property string $img
 * @property string $estado
 *
 * @property Unapes $idUnapes
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banner';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_unapes'], 'integer'],
            [['img'], 'string', 'max' => 100/*,'on'=>'insert,update'*/],
            [['img'], 'safe'/*,'on' => 'search'*/],
            [['img'], 'file', 'extensions' =>'jpg,png'/*,'allowEmpty'=>true,'on'=>'insert,update'*/],
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
            'id_banner' => 'Id Banner',
            'id_unapes' => 'Id Unapes',
             'img' => 'Imagenes',
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
