<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pemesanan;

/**
 * PemesananSearch represents the model behind the search form of `app\models\Pemesanan`.
 */
class PemesananSearch extends Pemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wisatawan', 'jumlah_tiket'], 'integer'],
            [['kategori_pesanan', 'tanggal_berkunjung'], 'safe'],
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
        $query = Pemesanan::find();

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
            'id_wisatawan' => $this->id_wisatawan,
            'jumlah_tiket' => $this->jumlah_tiket,
            'tanggal_berkunjung' => $this->tanggal_berkunjung,
        ]);

        $query->andFilterWhere(['like', 'kategori_pesanan', $this->kategori_pesanan]);

        return $dataProvider;
    }
}
