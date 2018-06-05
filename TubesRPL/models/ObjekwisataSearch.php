<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objekwisata;

/**
 * ObjekwisataSearch represents the model behind the search form of `app\models\Objekwisata`.
 */
class ObjekwisataSearch extends Objekwisata
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wisata', 'harga'], 'integer'],
            [['nama_tempat', 'alamat', 'operasional'], 'safe'],
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
        $query = Objekwisata::find();

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
            'id_wisata' => $this->id_wisata,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'nama_tempat', $this->nama_tempat])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'operasional', $this->operasional]);

        return $dataProvider;
    }
}
