<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%favorite_user}}`.
 */
class m210115_165128_create_favorite_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%favorite_user}}', [
            'user_id' => $this->integer(),
            'favorite_user_id' => $this->integer()
        ]);

        $this->addPrimaryKey('user_id-favorite_user_id', 'favorite_user', ['user_id', 'favorite_user_id']);

        $this->addForeignKey(
            'fk-favorite_user-user_id',
            'favorite_user',
            'user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-favorite_user-favorite_user_id',
            'favorite_user',
            'favorite_user_id',
            'user',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%favorite_user}}');
    }
}
