<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Eventos;

/**
 * EventosSearch represents the model behind the search form about `frontend\models\Eventos`.
 */
class EventosSearch extends Eventos {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['id_evento'], 'integer'],
                [['evento', 'detalle', 'fecha', 'logo', 'estado', 'id_unapes'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
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
    public function search($params) {
        $query = Eventos::find();

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
        $query->joinWith('idUnapes');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_evento' => $this->id_evento,
           // 'id_unapes' => $this->id_unapes,
            'fecha' => $this->fecha,
        ]);

        $query->andFilterWhere(['like', 'evento', $this->evento])
                ->andFilterWhere(['like', 'detalle', $this->detalle])
                ->andFilterWhere(['like', 'logo', $this->logo])
                ->andFilterWhere(['like', 'estado', $this->estado])
                ->andFilterWhere(['like', 'unapes.nombre', $this->id_unapes]);

        return $dataProvider;
    }

}
