<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Directiva;

/**
 * DirectivaSearch represents the model behind the search form about `frontend\models\Directiva`.
 */
class DirectivaSearch extends Directiva {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['id_directiva'], 'integer'],
                [['id_unapes', 'id_cargo', 'id_miembro', 'id_periodo'], 'safe'],
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
        $query = Directiva::find();

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
        $query->joinWith('idCargo');
        $query->joinWith('idMiembro');
        $query->joinWith('idPeriodo');


        // grid filtering conditions
        $query->andFilterWhere([
                //'id_directiva' => $this->id_directiva,
                //'id_unapes' => $this->id_unapes,
                //'id_cargo' => $this->id_cargo,
                //'id_miembro' => $this->id_miembro,
                //'id_periodo' => $this->id_periodo,
        ]);
        $query->andFilterWhere(['like', 'unapes.nombre', $this->id_unapes])
                ->andFilterWhere(['like', 'cargos.cargo', $this->id_cargo])
                ->andFilterWhere(['like', 'miembros.Apellidos', $this->id_miembro])
                ->andFilterWhere(['like', 'periodo.fecha_inicio', $this->id_periodo]);


        return $dataProvider;
    }

}
