<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m240128_213526_make_order_table
 */
class m240128_213526_make_order_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id' => Schema::TYPE_PK,
            'manager_id' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
            'hotel_id' => $this->integer()->notNull(),
            'check_in' => $this->dateTime()->notNull(),
            'check_out' => $this->dateTime()->notNull(),
            'price' => $this->float()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-manager',
            'order',
            'manager_id',
            'manager',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-client',
            'order',
            'client_id',
            'client',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-hotel',
            'order',
            'hotel_id',
            'hotel',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240128_213526_make_order_table cannot be reverted.\n";

        return false;
    }
    */
}
