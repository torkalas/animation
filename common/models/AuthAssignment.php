<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "auth_assignment".
 *
 * @property string $item_name
 * @property string $user_id
 * @property integer $created_at
 *
 * @property AuthItem $itemName
 */
class AuthAssignment extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_assignment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_name', 'user_id'], 'required'],
            [['user_id'], 'unique'],
            [['item_name', 'user_id', 'created_at'], 'safe'],
            [['item_name', 'user_id'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_name' => 'Роль',
            'user_id' => 'Имя пользователя',
            'created_at' => 'Дата создания',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItemRuName()
    {
        return $this->hasOne(AuthItem::className(), ['name' => 'item_name']);
    }

    public static function findByPk($id)
    {
        return static::findOne(['user_id' => $id]);
    }

    public function getUserName()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

}
