<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m240128_213254_make_hotel_table
 */
class m240128_213254_make_hotel_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hotel', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'is_active' => Schema::TYPE_BOOLEAN . ' NOT NULL',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('hotel');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240128_213254_make_hotel_table cannot be reverted.\n";

        return false;
    }
    */
}
