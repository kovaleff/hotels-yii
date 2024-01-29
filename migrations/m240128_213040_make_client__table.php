<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m240128_213040_make_client__table
 */
class m240128_213040_make_client__table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('client', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'address' => Schema::TYPE_STRING . ' NOT NULL',
            'inn' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('client');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240128_213040_make_client__table cannot be reverted.\n";

        return false;
    }
    */
}
