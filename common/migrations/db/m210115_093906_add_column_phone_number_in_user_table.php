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
        $this->addColumn('user', 'last_name', $this->string()->after('username'));
        $this->addColumn('user', 'first_name', $this->string()->after('username'));
        $this->addColumn('user', 'phone_number', $this->string()->after('username'));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'phone_number');
        $this->dropColumn('user', 'first_name');
        $this->dropColumn('user', 'last_name');
    }
}
