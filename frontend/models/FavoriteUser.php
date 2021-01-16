<?php

namespace app\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "favorite_user".
 *
 * @property int $user_id
 * @property int $favorite_user_id
 *
 * @property User $favoriteUser
 * @property User $user
 */
class FavoriteUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'favorite_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'favorite_user_id'], 'required'],
            [['user_id', 'favorite_user_id'], 'integer'],
            [['user_id', 'favorite_user_id'], 'unique', 'targetAttribute' => ['user_id', 'favorite_user_id']],
            [['favorite_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['favorite_user_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'favorite_user_id' => 'Favorite User ID',
        ];
    }

    /**
     * Gets query for [[FavoriteUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFavoriteUser()
    {
        return $this->hasOne(User::className(), ['id' => 'favorite_user_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
