<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ta_pelanggan".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property int $no_id
 * @property int $no_telp
 */
class TaPelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ta_pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nama', 'alamat', 'no_id', 'no_telp'], 'required'],
            [['id', 'no_id', 'no_telp'], 'integer'],
            [['nama', 'alamat'], 'string', 'max' => 255],
            [['id'], 'unique'],
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
            'alamat' => 'Alamat',
            'no_id' => 'No ID',
            'no_telp' => 'No Telp',
        ];
    }
}
