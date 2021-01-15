<?php

use yii\db\Migration;

/**
 * Class m210115_093906_add_column_phone_number_in_user_table
 */
class m210115_093906_add_column_phone_number_in_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210115_093906_add_column_phone_number_in_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_093906_add_column_phone_number_in_user_table cannot be reverted.\n";

        return false;
    }
    */
}
