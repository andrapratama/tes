<?php

use yii\db\Migration;

/**
 * Class m200914_105721_tambah_ref_badan_usaha
 */
class m200914_105721_tambah_ref_badan_usaha extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_badan_usaha', [
            'id_badan_usaha' => $this->tinyInteger()->notNull(),
            'nama_badan_usaha' => $this->string()->notNull()
        ]);

        $this->addPrimaryKey(
            'PK_ref_badan_usaha',
            'ref_badan_usaha',
            ['id_badan_usaha']
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200914_105721_tambah_ref_badan_usaha cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200914_105721_tambah_ref_badan_usaha cannot be reverted.\n";

        return false;
    }
    */
}
