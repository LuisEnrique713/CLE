<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Curso;

/**
 * CursoSearch represents the model behind the search form of `backend\models\Curso`.
 */
class CursoSearch extends Curso
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Cupo'], 'integer'],
            [['Nombre_Del_Curso', 'Docente', 'Numero_De_Dias', 'Fecha_De_Inicio', 'Fecha_De_Cierre', 'Modalidad'], 'safe'],
            [['Precio_Del_Curso'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Curso::find();

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
            'id' => $this->id,
            'Cupo' => $this->Cupo,
            'Fecha_De_Inicio' => $this->Fecha_De_Inicio,
            'Fecha_De_Cierre' => $this->Fecha_De_Cierre,
            'Precio_Del_Curso' => $this->Precio_Del_Curso,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Del_Curso', $this->Nombre_Del_Curso])
            ->andFilterWhere(['like', 'Docente', $this->Docente])
            ->andFilterWhere(['like', 'Numero_De_Dias', $this->Numero_De_Dias])
            ->andFilterWhere(['like', 'Modalidad', $this->Modalidad]);

        return $dataProvider;
    }
}
