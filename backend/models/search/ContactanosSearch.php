<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Contactanos;

/**
 * ContactanosSearch represents the model behind the search form of `backend\models\Contactanos`.
 */
class ContactanosSearch extends Contactanos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['Nombre', 'Correo', 'Quejas_o_Sugerencias'], 'safe'],
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
        $query = Contactanos::find();

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
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Quejas_o_Sugerencias', $this->Quejas_o_Sugerencias]);

        return $dataProvider;
    }
}
