<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Grupo;

/**
 * GrupoSearch represents the model behind the search form about `backend\models\Grupo`.
 */
class GrupoSearch extends Grupo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_grupo'], 'integer'],
            [['nombre', 'logo', 'responsable', 'genero_artistico', 'estilo_artistico', 'trayectoria', 'youtube', 'facebook', 'twitter', 'telefonos', 'direccion', 'id_unapes'], 'safe'],
            [['precio'], 'number'],
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
        $query = Grupo::find();

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
            'id_grupo' => $this->id_grupo,
            //'id_unapes' => $this->id_unapes,
            'precio' => $this->precio,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'logo', $this->logo])
            ->andFilterWhere(['like', 'responsable', $this->responsable])
            ->andFilterWhere(['like', 'genero_artistico', $this->genero_artistico])
            ->andFilterWhere(['like', 'estilo_artistico', $this->estilo_artistico])
            ->andFilterWhere(['like', 'trayectoria', $this->trayectoria])
            ->andFilterWhere(['like', 'youtube', $this->youtube])
            ->andFilterWhere(['like', 'facebook', $this->facebook])
            ->andFilterWhere(['like', 'twitter', $this->twitter])
            ->andFilterWhere(['like', 'telefonos', $this->telefonos])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
->andFilterWhere(['like', 'unapes.nombre', $this->id_unapes]);
        return $dataProvider;
    }
}
