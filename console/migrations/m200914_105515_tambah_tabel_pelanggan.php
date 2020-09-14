<?php

use yii\db\Migration;

/**
 * Class m200914_105515_tambah_tabel_pelanggan
 */
class m200914_105515_tambah_tabel_pelanggan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ta_pelanggan', [
            'id' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
            'alamat' => $this->string()->notNull(),
            'no_id' => $this->integer()->notNull(),
            'no_telp' => $this->integer()->notNull(),
        ]);

        $this->addPrimaryKey(
            'PK_ta_pelanggan',
            'ta_pelanggan',
            ['id']
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200914_105515_tambah_tabel_pelanggan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200914_105515_tambah_tabel_pelanggan cannot be reverted.\n";

        return false;
    }
    */
}
