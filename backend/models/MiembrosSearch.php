<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Miembros;

/**
 * MiembrosSearch represents the model behind the search form about `backend\models\Miembros`.
 */
class MiembrosSearch extends Miembros {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['id_miembro'], 'integer'],
                [['cedula', 'nombres', 'apellidos', 'pais', 'provincia', 'ciudad', 'parroquia', 'direccion', 'referencia_domiciliaria', 'referencia_personal', 'nivel_formacion', 'titulo', 'grupo_etnico', 'telefono', 'email', 'fecha_nacimiento', 'genero', 'hoja_de_vida', 'foto', 'estado', 'id_grupo'], 'safe'],
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
        $query = Miembros::find();

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
            'id_miembro' => $this->id_miembro,
            //'id_grupo' => $this->id_grupo,
            'fecha_nacimiento' => $this->fecha_nacimiento,
        ]);

        $query->andFilterWhere(['like', 'cedula', $this->cedula])
                ->andFilterWhere(['like', 'nombres', $this->nombres])
                ->andFilterWhere(['like', 'apellidos', $this->apellidos])
                ->andFilterWhere(['like', 'pais', $this->pais])
                ->andFilterWhere(['like', 'provincia', $this->provincia])
                ->andFilterWhere(['like', 'ciudad', $this->ciudad])
                ->andFilterWhere(['like', 'parroquia', $this->parroquia])
                ->andFilterWhere(['like', 'direccion', $this->direccion])
                ->andFilterWhere(['like', 'referencia_domiciliaria', $this->referencia_domiciliaria])
                ->andFilterWhere(['like', 'referencia_personal', $this->referencia_personal])
                ->andFilterWhere(['like', 'nivel_formacion', $this->nivel_formacion])
                ->andFilterWhere(['like', 'titulo', $this->titulo])
                ->andFilterWhere(['like', 'grupo_etnico', $this->grupo_etnico])
                ->andFilterWhere(['like', 'telefono', $this->telefono])
                ->andFilterWhere(['like', 'email', $this->email])
                ->andFilterWhere(['like', 'genero', $this->genero])
                ->andFilterWhere(['like', 'hoja_de_vida', $this->hoja_de_vida])
                ->andFilterWhere(['like', 'foto', $this->foto])
                ->andFilterWhere(['like', 'estado', $this->estado])
                ->andFilterWhere(['like', 'grupo.nombre', $this->id_grupo]);

        return $dataProvider;
    }

}
