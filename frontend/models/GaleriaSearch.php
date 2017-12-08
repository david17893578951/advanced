<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Galeria;

/**
 * GaleriaSearch represents the model behind the search form about `frontend\models\Galeria`.
 */
class GaleriaSearch extends Galeria {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['id_galeria'], 'integer'],
                [['img1', 'img2', 'img3', 'img4', 'img5', 'id_grupo'], 'safe'],
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
        $query = Galeria::find();

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
        $query->joinWith('idGrupo');
        // grid filtering conditions
        $query->andFilterWhere([
            'id_galeria' => $this->id_galeria,
                //'id_grupo' => $this->id_grupo,
        ]);

        $query->andFilterWhere(['like', 'img1', $this->img1])
                ->andFilterWhere(['like', 'img2', $this->img2])
                ->andFilterWhere(['like', 'img3', $this->img3])
                ->andFilterWhere(['like', 'img4', $this->img4])
                ->andFilterWhere(['like', 'img5', $this->img5])
                ->andFilterWhere(['like', 'grupo.nombre', $this->id_grupo]);

        return $dataProvider;
    }

}
