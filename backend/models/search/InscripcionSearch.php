<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Inscripcion;

/**
 * InscripcionSearch represents the model behind the search form of `backend\models\Inscripcion`.
 */
class InscripcionSearch extends Inscripcion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'curso_id', 'perfil_id', 'nivel_id'], 'integer'],
            [['Nombre_Del_Estudiante', 'matricula', 'Comprobante_De_pago'], 'safe'],
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
        $query = Inscripcion::find();

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
            'curso_id' => $this->curso_id,
            'perfil_id' => $this->perfil_id,
            'nivel_id' => $this->nivel_id,
        ]);

        $query->andFilterWhere(['like', 'Nombre_Del_Estudiante', $this->Nombre_Del_Estudiante])
            ->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'Comprobante_De_pago', $this->Comprobante_De_pago]);

        return $dataProvider;
    }
}
