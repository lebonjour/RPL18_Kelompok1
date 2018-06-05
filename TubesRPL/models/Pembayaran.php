<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pembayaran".
 *
 * @property int $id_pembayaran
 * @property string $pilihan_pembayaran
 * @property string $status
 */
class Pembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pilihan_pembayaran', 'status'], 'required'],
            [['pilihan_pembayaran'], 'string', 'max' => 15],
            [['status'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pembayaran' => 'Id Pembayaran',
            'pilihan_pembayaran' => 'Pilihan Pembayaran',
            'status' => 'Status',
        ];
    }

    public function dataPemilihanPembayaran(){
        return[
            1 => 'transfer',
            2 => 'langsung',
        ];
    }

    public function dataStatus(){
        return[
            1 => 'sudah bayar',
            2 => 'belum bayar',
        ];
    }
}
