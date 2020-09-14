<?php

use yii\db\Migration;

/**
 * Class m200914_105557_tambah_ref_agama
 */
class m200914_105557_tambah_ref_agama extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ref_agama', [
            'id_agama' => $this->tinyInteger()->notNull(),
            'nama_agama' => $this->string()->notNull()
        ]);

        $this->addPrimaryKey(
            'PK_ref_agama',
            'ref_agama',
            ['id_agama']
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200914_105557_tambah_ref_agama cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200914_105557_tambah_ref_agama cannot be reverted.\n";

        return false;
    }
    */
}
