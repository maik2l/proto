<?php

use yii\db\Migration;

/**
 * Class m210116_121923_add_data_to_user_table
 */
class m210116_121923_add_data_to_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('user', ['username' => 'user1', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Кевин', 'last_name' => 'Cкогланд', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user2', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Джон', 'last_name' => 'Траволта', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user3', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Альберт', 'last_name' => 'Степанцев', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user4', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Микки ', 'last_name' => 'Рурк', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user5', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Мэтт ', 'last_name' => 'Зандстра', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user6', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Арнольд ', 'last_name' => 'Шварценеггер', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user7', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Дмитрий', 'last_name' => 'Елисеев', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user8', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Фернандо', 'last_name' => 'Алонсо', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user9', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Надежда', 'last_name' => 'Бабкина', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user10', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Шон', 'last_name' => 'Пэн', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);
        $this->insert('user', ['username' => 'user11', 'phone_number' => '+375 (33) 123 45 67', 'first_name' => 'Тэйлор ', 'last_name' => 'Отвел', 'auth_key' => 'xmQMdV8-bv7YcDff2_TKcqAMtnpbw-N1', 'access_token' => '2lsIs6GKSvIvjPaRxeMG-OYa7LLqlGxrbjXKQ7y1', 'password_hash' => '$2y$13$TtMSjw6Tn6sl1zvnyEXfieOygagrVAKL86wmCc2RKqgpNUH0jvkC1', 'email' => 'email@email.com', 'created_at' => 1610799896, 'updated_at' => 1610799896]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return true;
    }
}
