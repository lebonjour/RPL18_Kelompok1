<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $firstName
 * @property string $lastName
 * @property string $username
 * @property string $password
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'username', 'password'], 'required'],
            [['firstName'], 'string', 'max' => 15],
            [['lastName'], 'string', 'max' => 20],
            [['username'], 'string', 'max' => 22],
            [['password'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
