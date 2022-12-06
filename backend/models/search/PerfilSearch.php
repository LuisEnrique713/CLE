<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Perfil;
use backend\models\Calificaciones;

/**
 * PerfilSearch represents the model behind the search form of `backend\models\Perfil`.
 */
class PerfilSearch extends Perfil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'curso_id'], 'integer'],
            [['Matricula', 'Nombre_Estudiante', 'Genero', 'Fecha_De_Nacimiento', 'Correo', 'Telefono', 'Lugar_De_Origen', 'Grupo_Etnico', 'Porcentaje_Idioma'], 'safe'],
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
        $query = Perfil::find();

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
            'Fecha_De_Nacimiento' => $this->Fecha_De_Nacimiento,
            'user_id' => $this->user_id,
            'curso_id' => $this->curso_id,
        ]);

        $query->andFilterWhere(['like', 'Matricula', $this->Matricula])
            ->andFilterWhere(['like', 'Nombre_Estudiante', $this->Nombre_Estudiante])
            ->andFilterWhere(['like', 'Genero', $this->Genero])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Telefono', $this->Telefono])
            ->andFilterWhere(['like', 'Lugar_De_Origen', $this->Lugar_De_Origen])
            ->andFilterWhere(['like', 'Grupo_Etnico', $this->Grupo_Etnico])
            ->andFilterWhere(['like', 'Porcentaje_Idioma', $this->Porcentaje_Idioma]);

        return $dataProvider;
    }
}
