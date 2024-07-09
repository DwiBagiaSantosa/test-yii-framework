<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id
 * @property string $nama
 * @property string $nim
 * @property string|null $alamat
 * @property string|null $tanggal_lahir
 * @property string|null $jurusan
 * @property string $created_at
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nim'], 'required'],
            [['alamat'], 'string'],
            [['tanggal_lahir', 'created_at'], 'safe'],
            [['nama', 'nim', 'jurusan'], 'string', 'max' => 255],
            [['nim'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nim' => 'Nim',
            'alamat' => 'Alamat',
            'tanggal_lahir' => 'Tanggal Lahir',
            'jurusan' => 'Jurusan',
            'created_at' => 'Created At',
        ];
    }
}
