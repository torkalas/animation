<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property integer $nav_menu
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nav_menu'], 'required'],
            [['nav_menu'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nav_menu' => 'Nav Menu',
        ];
    }

    public static function navMenu() {
        $query = self::find();
        return
            $menu = $query
                ->where(array('id' => 1))
                ->one();
    }
}
