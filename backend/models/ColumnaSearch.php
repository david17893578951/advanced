<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Columna;

/**
 * ColumnaSearch represents the model behind the search form about `backend\models\Columna`.
 */
class ColumnaSearch extends Columna
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_columna'], 'integer'],
            [['autor', 'detalle', 'fecha', 'telefono', 'correo', 'estado'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Columna::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_columna' => $this->id_columna,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'autor', $this->autor])
            ->andFilterWhere(['like', 'detalle', $this->detalle])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'correo', $this->correo])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
