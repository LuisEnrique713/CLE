<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Calificaciones;
use backend\models\Perfil;

/**
 * CalificacionesSearch represents the model behind the search form of `backend\models\Calificaciones`.
 */
class CalificacionesSearch extends Calificaciones
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'perfil_id', 'curso_id'], 'integer'],
            [['Parcial_1', 'Parcial_2', 'Parcial_3', 'Parcial_4', 'Promedio_Total'], 'number'],
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
    public function search($params, $curso_id = null)
    {
        if ($curso_id) {
            // code...
             $query = Calificaciones::find()->where(['curso_id'=> $curso_id]);
        }else{
           $query = Calificaciones::find();
        };

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
            'Parcial_1' => $this->Parcial_1,
            'Parcial_2' => $this->Parcial_2,
            'Parcial_3' => $this->Parcial_3,
            'Parcial_4' => $this->Parcial_4,
            'Promedio_Total' => $this->Promedio_Total,
            'perfil_id' => $this->perfil_id,
            'curso_id' => $this->curso_id,
        ]);

        return $dataProvider;
    }
}
