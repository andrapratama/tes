<?php

use yii\db\Migration;

/**
 * Class m200914_110559_tambah_ref_biodata_pegawai
 */
class m200914_110559_tambah_ref_biodata_pegawai extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_biodata_pegawai', [
            'id_provinsi' => $this->tinyInteger()->notNull(),
            'id_kabkota' => $this->integer()->notNull(),
            'id_kecamatan' => $this->integer()->notNull(),
            'id_kelurahan' => $this->integer()->notNull(),
            'id_kodepos' => $this->integer()->notNull(),
            'id_agama' => $this->tinyInteger()->notNull(),
            'id_jenis_kelamin' => $this->tinyInteger()->notNull(),
            'id_status_nikah' => $this->tinyInteger()->notNull(),
            'id_pendidikan' => $this->tinyInteger()->notNull(),
            'id_pegawai' => $this->integer()->notNull(),
            'nama_pegawai' => $this->integer()->notNull(),
            'nik_pegawai' => $this->string()->notNull(),
            'alamat_pegawai' => $this->string()->notNull(),
            'telp_pegawai' => $this->string()->notNull(),
            'email_pegawai' => $this->string()->notNull(),
            'rek_bank_pegawai' => $this->string()->notNull(),
            'nama_bank_pegawai' => $this->string()->notNull(),
            'rek_bank_atas_nama_pegawai' => $this->string()->notNull(),
            'foto_diri_pegawai' => $this->string()->notNull(),
            'foto_nik_pegawai' => $this->string()->notNull()

        ]);

        $this->addPrimaryKey(
            'PK_ref_biodata_pegawai',
            'ref_biodata_pegawai',
            [
                'id_provinsi',
                'id_kabkota',
                'id_kecamatan',
                'id_kelurahan',
                'id_kodepos',
                'id_agama',
                'id_jenis_kelamin',
                'id_status_nikah',
                'id_pendidikan',
                'id_pegawai'
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200914_110559_tambah_ref_biodata_pegawai cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200914_110559_tambah_ref_biodata_pegawai cannot be reverted.\n";

        return false;
    }
    */
}
