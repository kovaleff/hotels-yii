<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m240128_212645_make_manager_table
 */
class m240128_212645_make_manager_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('manager', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('manager');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240128_212645_make_manager_table cannot be reverted.\n";

        return false;
    }
    */
}
