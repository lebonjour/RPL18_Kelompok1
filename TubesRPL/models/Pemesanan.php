<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $id_wisatawan
 * @property int $jumlah_tiket
 * @property string $kategori_pesanan
 * @property string $tanggal_berkunjung
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jumlah_tiket', 'kategori_pesanan', 'tanggal_berkunjung'], 'required'],
            [['jumlah_tiket'], 'integer'],
            [['tanggal_berkunjung'], 'safe'],
            [['kategori_pesanan'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wisatawan' => 'Id Wisatawan',
            'jumlah_tiket' => 'Jumlah Tiket',
            'kategori_pesanan' => 'Kategori Pesanan',
            'tanggal_berkunjung' => 'Tanggal Berkunjung',
        ];
    }

    public function dataKategoripesanan(){
        return[
            1 => 'perorangan',
            2 => 'paket',
        ];
    }
}
