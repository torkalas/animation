<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "theme".
 *
 * @property integer $id
 * @property integer $active
 * @property string $name
 * @property integer $font_size_menu
 * @property string $background_color_menu
 * @property string $background_color_gradient_menu_position
 * @property string $background_color_gradient_menu_1
 * @property string $background_color_gradient_menu_2
 * @property string $background_image_menu_url
 * @property string $opacity_background_image_menu
 * @property string $border_width_menu
 * @property string $border_radius_menu
 * @property string $border_color_menu
 * @property string $font_color_brand
 * @property integer $font_size_brand
 * @property string $brand_url
 * @property string $font_color_brand_focus
 * @property string $font_color_brand_hover
 * @property string $font_color_key_menu
 * @property string $background_color_key_menu
 * @property string $background_color_gradient_key_menu_position
 * @property string $background_color_gradient_key_menu_1
 * @property string $background_color_gradient_key_menu_2
 * @property integer $border_radius_key_menu
 * @property string $font_color_key_menu_hover
 * @property string $background_color_key_menu_hover
 * @property string $background_color_gradient_key_menu_position_hover
 * @property string $background_color_gradient_key_menu_1_hover
 * @property string $background_color_gradient_key_menu_2_hover
 * @property string $font_color_key_menu_focus
 * @property string $background_color_key_menu_focus
 * @property string $background_color_gradient_key_menu_position_focus
 * @property string $background_color_gradient_key_menu_1_focus
 * @property string $background_color_gradient_key_menu_2_focus
 * @property string $font_color_key_menu_active
 * @property string $background_color_key_menu_active
 * @property string $background_color_gradient_key_menu_position_active
 * @property string $background_color_gradient_key_menu_1_active
 * @property string $background_color_gradient_key_menu_2_active
 * @property string $border_color_key_toggle_menu
 * @property string $border_width_key_toggle_menu
 * @property string $background_color_key_toggle_menu_hover
 * @property string $background_color_gradient_key_toggle_menu_position_hover
 * @property string $background_color_gradient_key_toggle_menu_1_hover
 * @property string $background_color_gradient_key_toggle_menu_2_hover
 * @property string $background_color_key_toggle_menu_focus
 * @property string $background_color_gradient_key_toggle_menu_position_focus
 * @property string $background_color_gradient_key_toggle_menu_1_focus
 * @property string $background_color_gradient_key_toggle_menu_2_focus
 * @property string $background_color_icon_bar_key_toggle_menu
 * @property string $background_color_icon_bar_key_toggle_menu_hover
 * @property string $background_color_icon_bar_key_toggle_menu_focus
 */
class ThemeMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'theme_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active', 'name'], 'required'],
            [['active', 'font_size_menu', 'font_size_brand', 'border_radius_key_menu'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['background_color_menu', 'background_color_gradient_menu_position', 'background_color_gradient_menu_1', 'background_color_gradient_menu_2', 'background_image_menu_url', 'opacity_background_image_menu', 'border_width_menu', 'border_radius_menu', 'border_color_menu', 'font_color_brand', 'brand_url', 'font_color_brand_focus', 'font_color_brand_hover', 'font_color_key_menu', 'background_color_key_menu', 'background_color_gradient_key_menu_position', 'background_color_gradient_key_menu_1', 'background_color_gradient_key_menu_2', 'font_color_key_menu_hover', 'background_color_key_menu_hover', 'background_color_gradient_key_menu_position_hover', 'background_color_gradient_key_menu_1_hover', 'background_color_gradient_key_menu_2_hover', 'font_color_key_menu_focus', 'background_color_key_menu_focus', 'background_color_gradient_key_menu_position_focus', 'background_color_gradient_key_menu_1_focus', 'background_color_gradient_key_menu_2_focus', 'font_color_key_menu_active', 'background_color_key_menu_active', 'background_color_gradient_key_menu_position_active', 'background_color_gradient_key_menu_1_active', 'background_color_gradient_key_menu_2_active', 'border_color_key_toggle_menu', 'border_width_key_toggle_menu', 'background_color_key_toggle_menu_hover', 'background_color_gradient_key_toggle_menu_position_hover', 'background_color_gradient_key_toggle_menu_1_hover', 'background_color_gradient_key_toggle_menu_2_hover', 'background_color_key_toggle_menu_focus', 'background_color_gradient_key_toggle_menu_position_focus', 'background_color_gradient_key_toggle_menu_1_focus', 'background_color_gradient_key_toggle_menu_2_focus', 'background_color_icon_bar_key_toggle_menu', 'background_color_icon_bar_key_toggle_menu_hover', 'background_color_icon_bar_key_toggle_menu_focus'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'active' => 'Активна',
            'name' => 'Название',
            'font_size_menu' => 'Размер',
            'background_color_menu' => 'Цвет и прозрачность',
            'background_color_gradient_menu_position' => 'Направление градиента',
            'background_color_gradient_menu_1' => 'Цвет 1',
            'background_color_gradient_menu_2' => 'Цвет 2',
            'background_image_menu_url' => 'Картинка',
            'opacity_background_image_menu' => 'Прозрачность',
            'border_width_menu' => 'Толщина',
            'border_radius_menu' => 'Радиус',
            'border_color_menu' => 'Цвет и прозрачность',
            'font_color_brand' => 'Цвет и прозрачность',
            'font_size_brand' => 'Размер',
            'brand_url' => 'Картинка',
            'font_color_brand_focus' => 'Цвет и прозрачность при нажатии',
            'font_color_brand_hover' => 'Цвет и прозрачность при наведениии',
            'font_color_key_menu' => 'Цвет и прозрачность',
            'background_color_key_menu' => 'Цвет и прозрачность',
            'background_color_gradient_key_menu_position' => 'Направление градиента',
            'background_color_gradient_key_menu_1' => 'Цвет 1',
            'background_color_gradient_key_menu_2' => 'Цвет 2',
            'border_radius_key_menu' => 'Радиус углов',
            'font_color_key_menu_hover' => 'Цвет и прозрачность при наведении',
            'background_color_key_menu_hover' => 'Цвет и прозрачность при наведении',
            'background_color_gradient_key_menu_position_hover' => 'Цвет и прозрачность при наведении. Направление градиента',
            'background_color_gradient_key_menu_1_hover' => 'Цвет и прозрачность при наведении. Цвет 1',
            'background_color_gradient_key_menu_2_hover' => 'Цвет и прозрачность при наведении. Цвет 2',
            'font_color_key_menu_focus' => 'Цвет и прозрачность при нажатии',
            'background_color_key_menu_focus' => 'Цвет и прозрачность при нажатии',
            'background_color_gradient_key_menu_position_focus' => 'Цвет и прозрачность при нажатии. Направление градиента',
            'background_color_gradient_key_menu_1_focus' => 'Цвет и прозрачность при нажатии. Цвет 1',
            'background_color_gradient_key_menu_2_focus' => 'Цвет и прозрачность при нажатии. Цвет 2',
            'font_color_key_menu_active' => 'Цвет и прозрачность активной кнопки',
            'background_color_key_menu_active' => 'Цвет и прозрачность активной кнопки',
            'background_color_gradient_key_menu_position_active' => 'Цвет и прозрачность активной кнопки. Направление градиента',
            'background_color_gradient_key_menu_1_active' => 'Цвет и прозрачность фона с градиентом активной кнопки меню. Цвет 1',
            'background_color_gradient_key_menu_2_active' => 'Цвет и прозрачность фона с градиентом активной кнопки меню. Цвет 2',
            'border_color_key_toggle_menu' => 'Цвет и прозрачность рамки кнопки развертки',
            'border_width_key_toggle_menu' => 'Толщина рамки кнопки развертки меню',
            'background_color_key_toggle_menu_hover' => 'Цвет и прозрачность фона кнопки развертки меню при наведении',
            'background_color_gradient_key_toggle_menu_position_hover' => 'Цвет и прозрачность фона с градиентом кнопки развертки меню при наведении. Направление градиента',
            'background_color_gradient_key_toggle_menu_1_hover' => 'Цвет и прозрачность фона с градиентом кнопки развертки меню при наведении. Цвет 1',
            'background_color_gradient_key_toggle_menu_2_hover' => 'Цвет и прозрачность фона с градиентом кнопки развертки меню при наведении. Цвет 2',
            'background_color_key_toggle_menu_focus' => 'Цвет и прозрачность фона кнопки развертки меню при нажатии',
            'background_color_gradient_key_toggle_menu_position_focus' => 'Цвет и прозрачность фона с градиентом кнопки развертки меню при нажатии. Направление градиента',
            'background_color_gradient_key_toggle_menu_1_focus' => 'Цвет и прозрачность фона с градиентом кнопки развертки меню при нажатии. Цвет 1',
            'background_color_gradient_key_toggle_menu_2_focus' => 'Цвет и прозрачность фона с градиентом кнопки развертки меню при нажатии. Цвет 2',
            'background_color_icon_bar_key_toggle_menu' => 'Цвет и прозрачность трех горизонтальных рисак в кнопке развертки меню',
            'background_color_icon_bar_key_toggle_menu_hover' => 'Цвет и прозрачность трех горизонтальных рисак в кнопке развертки меню при наведении',
            'background_color_icon_bar_key_toggle_menu_focus' => 'Цвет и прозрачность трех горизонтальных рисак в кнопке развертки меню при нажатии',
        ];
    }

    public function getThemeMenu()
    {
        $query = self::find();
        return
            $temeMenu = $query
            ->where(array('active' => 1))
            ->one();
    }
}
