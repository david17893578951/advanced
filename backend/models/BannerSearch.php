<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Banner;

/**
 * BannerSearch represents the model behind the search form about `backend\models\Banner`.
 */
class BannerSearch extends Banner {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['id_banner'], 'integer'],
                [['img', 'estado', 'id_unapes'], 'safe'],
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
        $query = Banner::find();

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
            'id_banner' => $this->id_banner,
                //'id_unapes' => $this->id_unapes,
        ]);

        $query->andFilterWhere(['like', 'img', $this->img])
                ->andFilterWhere(['like', 'estado', $this->estado])
                ->andFilterWhere(['like', 'unapes.nombre', $this->id_unapes]);

        return $dataProvider;
    }

}
