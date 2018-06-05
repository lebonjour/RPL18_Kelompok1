<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objekwisata".
 *
 * @property int $id_wisata
 * @property string $nama_tempat
 * @property string $alamat
 * @property int $harga
 */
class Objekwisata extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'objekwisata';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tempat', 'alamat', 'harga','operasional'], 'required'],
            [['harga'], 'integer'],
            [['nama_tempat', 'alamat'], 'string', 'max' => 30],
            [['operasional'], 'char', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wisata' => 'Id Wisata',
            'nama_tempat' => 'Nama Tempat',
            'alamat' => 'Alamat',
            'harga' => 'Harga',
            'operasional' => 'Operasional',
        ];
    }
}
