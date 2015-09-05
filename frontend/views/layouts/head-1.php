<?php

/**
 * Head layout.
 */

use yii\helpers\Html;
use frontend\assets\Menu1Asset;
use yii\helpers\Url;
use common\models\ThemeMenu;
?>
<title><?= Html::encode($this->title); ?></title>
<?= Html::csrfMetaTags(); ?>
<?php $this->head(); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<?php
    Menu1Asset::register($this);

$this->registerMetaTag(
    [
        'charset' => Yii::$app->charset
    ]
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => Url::canonical()
    ]
); ?>

<!-- Темизация Главного меню-->
<?php
$modelThemeMenu = new ThemeMenu;
$themeMenu = $modelThemeMenu->getThemeMenu();
?>
<style type="text/css">
    <?php if ($themeMenu == !null ){
    echo '
    /*Меню*/
    #custom-bootstrap-menu
    {
        /*Размер шрифта меню - font_size_menu*/
        font-size: '.$themeMenu["font_size_menu"].'px;

        /*Цвет и прозрачность фона меню - background_color_menu*/
        background-color: rgba('.$themeMenu['background_color_menu'].');

        /*Цвет и прозрачность фона с градиентом меню. Направление градиента - background_color_gradient_menu_position*/
        /*Цвет и прозрачность фона с градиентом меню. Цвет 1 - background_color_gradient_menu_1*/
        /*Цвет и прозрачность фона с градиентом меню. Цвет 2 - background_color_gradient_menu_2*/
        background: linear-gradient('.$themeMenu['background_color_gradient_menu_position'].', rgba('.$themeMenu['background_color_gradient_menu_1'].') 0%, rgba('.$themeMenu['background_color_gradient_menu_2'].') 100%);

        /*Картинка фона меню (ее высота будет задавать высату всего меню) - background_image_menu_url*/

        /*Прозрачность картинки фона меню - opacity_background_image_menu*/

        /*Рамка (бордюр) меню*/

        /*Толщина рамки меню - border_width_menu*/
        border-width: '.$themeMenu['border_width_menu'].'px;

        /*Радиус рамки меню - border_radius_menu*/
        border-radius: '.$themeMenu['border_radius_menu'].'px;

        /*Цвет и прозрачность и прозрачность рамки меню - border_color_menu*/
        border-color: rgba('.$themeMenu['border_color_menu'].');
    }
    /*Бренд*/
    #custom-bootstrap-menu .navbar-brand
    {
        /*Цвет и прозрачность шрифта бренда - font_color_brand*/
        color: rgba('.$themeMenu['font_color_brand'].');

        /*Размер шрифта бренда - font_size_brand*/
        font-size: '.$themeMenu['font_size_brand'].'px;

        /*Картинка бренда (ее высота будет задавать высату всего меню) - brand_url*/
    }
    #custom-bootstrap-menu .navbar-brand:focus
    {
        /*Цвет и прозрачность бренда при нажатии - font_color_brand_focus*/
        color: rgba('.$themeMenu['font_color_brand_focus'].');
    }
    #custom-bootstrap-menu .navbar-brand:hover
    {
        /*Цвет и прозрачность бренда при наведениии - font_color_brand_hover*/
        color: rgba('.$themeMenu['font_color_brand_hover'].');
    }
    /*Кнопки меню*/
    #custom-bootstrap-menu .navbar-nav>li>a
    {
        /*Цвет и прозрачность шрифта кнопки меню - font_color_key_menu*/
        color: rgba('.$themeMenu['font_color_key_menu'].');

        /*Цвет и прозрачность фона кнопки меню - background_color_key_menu*/
        background-color: rgba('.$themeMenu['background_color_key_menu'].');

        /*Цвет и прозрачность фона с градиентом кнопки меню. Направление градиента - background_color_gradient_key_menu_position*/
        /*Цвет и прозрачность фона с градиентом кнопки меню. Цвет 1 - background_color_gradient_key_menu_1*/
        /*Цвет и прозрачность фона с градиентом кнопки меню. Цвет 2 - background_color_gradient_key_menu_2*/
        background: linear-gradient('.$themeMenu['background_color_gradient_key_menu_position'].', rgba('.$themeMenu['background_color_gradient_key_menu_1'].') 0%, rgba('.$themeMenu['background_color_gradient_key_menu_2'].') 100%);

        /*Радиус кнопки меню - border_radius_key_menu*/
        border-radius: '.$themeMenu['border_radius_key_menu'].'px;

    }
    #custom-bootstrap-menu .navbar-nav>li>a:hover
    {
        /*Цвет и прозрачность шрифта кнопки меню при наведении - font_color_key_menu_hover*/
        color: rgba('.$themeMenu['font_color_key_menu_hover'].');
        /*Цвет и прозрачность фона кнопки меню при наведении - background_color_key_menu_hover*/
        background-color: rgba('.$themeMenu['background_color_key_menu_hover'].');
        /*Цвет и прозрачность фона с градиентом кнопки меню при наведении. Направление градиента - background_color_gradient_key_menu_position_hover*/
        /*Цвет и прозрачность фона с градиентом кнопки меню при наведении. Цвет 1 - background_color_gradient_key_menu_1_hover*/
        /*Цвет и прозрачность фона с градиентом кнопки меню при наведении. Цвет 2 - background_color_gradient_key_menu_2_hover*/
        background: linear-gradient('.$themeMenu['background_color_gradient_key_menu_position_hover'].', rgb('.$themeMenu['background_color_gradient_key_menu_1_hover'].') 0%, rgb('.$themeMenu['background_color_gradient_key_menu_2_hover'].') 100%);

    }
    #custom-bootstrap-menu .navbar-nav>li>a:focus
    {
        /*Цвет и прозрачность шрифта кнопки меню при нажатии - font_color_key_menu_focus*/
        color: rgba('.$themeMenu['font_color_key_menu_focus'].');
        /*Цвет и прозрачность фона кнопки меню при нажатии - background_color_key_menu_focus*/
        background-color: rgba('.$themeMenu['background_color_key_menu_focus'].');
        /*Цвет и прозрачность фона с градиентом кнопки меню при нажатии. Направление градиента - background_color_gradient_key_menu_position_focus*/
        /*Цвет и прозрачность фона с градиентом кнопки меню при нажатии. Цвет 1 - background_color_gradient_key_menu_1_focus*/
        /*Цвет и прозрачность фона с градиентом кнопки меню при нажатии. Цвет 2 - background_color_gradient_key_menu_2_focus*/
        background: linear-gradient('.$themeMenu['background_color_gradient_key_menu_position_focus'].', rgba('.$themeMenu['background_color_gradient_key_menu_1_focus'].') 0%, rgba('.$themeMenu['background_color_gradient_key_menu_2_focus'].') 100%);
    }
    /*Активная кнопки меню (Зажатая кнопка, указующая раздел в которам находится пользователь)*/
    #custom-bootstrap-menu .navbar-nav>.active>a,
    #custom-bootstrap-menu .navbar-nav>.active>a:hover,
    #custom-bootstrap-menu .navbar-nav>.active>a:focus
    {
        /*Цвет и прозрачность шрифта активной кнопки меню - font_color_key_menu_active*/
        color: rgba('.$themeMenu['font_color_key_menu_active'].');

        /*Цвет и прозрачность фона активной кнопки меню - background_color_key_menu_active*/
        background-color: rgba('.$themeMenu['background_color_key_menu_active'].');

        /*Цвет и прозрачность фона с градиентом активной кнопки меню. Направление градиента - background_color_gradient_key_menu_position_active*/
        /*Цвет и прозрачность фона с градиентом активной кнопки меню. Цвет 1 - background_color_gradient_key_menu_1_active*/
        /*Цвет и прозрачность фона с градиентом активной кнопки меню. Цвет 2 - background_color_gradient_key_menu_2_active*/
        background: linear-gradient('.$themeMenu['background_color_gradient_key_menu_position_active'].', rgba('.$themeMenu['background_color_gradient_key_menu_1_active'].') 0%, rgba('.$themeMenu['background_color_gradient_key_menu_2_active'].') 100%);
    }
    /*Кнопка развертки меню*/
    #custom-bootstrap-menu .navbar-toggle
    {
        /*Цвет и прозрачность рамки кнопки развертки меню - border_color_key_toggle_menu*/
        border-color: rgba('.$themeMenu['border_color_key_toggle_menu'].');

        /*Толщина рамки кнопки развертки меню - border_width_key_toggle_menu*/
        border-width: '.$themeMenu['border_width_key_toggle_menu'].'px;
    }
    #custom-bootstrap-menu .navbar-toggle:hover
    {
        /*Цвет и прозрачность фона кнопки развертки меню при наведении (без наведения Фон прозрачный) - background_color_key_toggle_menu_hover*/
        background-color: rgba('.$themeMenu['background_color_key_toggle_menu_hover'].');

        /*Цвет и прозрачность фона с градиентом кнопки развертки меню при наведении. Направление градиента - background_color_gradient_key_toggle_menu_position_hover*/
        /*Цвет и прозрачность фона с градиентом кнопки развертки меню при наведении. Цвет 1 - background_color_gradient_key_toggle_menu_1_hover*/
        /*Цвет и прозрачность фона с градиентом кнопки развертки меню при наведении. Цвет 2 - background_color_gradient_key_toggle_menu_2_hover*/
        background: linear-gradient('.$themeMenu['background_color_gradient_key_toggle_menu_position_hover'].', rgb('.$themeMenu['background_color_gradient_key_toggle_menu_1_hover'].') 0%, rgb('.$themeMenu['background_color_gradient_key_toggle_menu_2_hover'].') 100%);
    }
    #custom-bootstrap-menu .navbar-toggle:focus
    {
        /*Цвет и прозрачность фона кнопки развертки меню при нажатии (без нажатия Фон прозрачный) - background_color_key_toggle_menu_focus*/
        background-color: rgba('.$themeMenu['background_color_key_toggle_menu_focus'].');

        /*Цвет и прозрачность фона с градиентом кнопки развертки меню при нажатии. Направление градиента - background_color_gradient_key_toggle_menu_position_focus*/
        /*Цвет и прозрачность фона с градиентом кнопки развертки меню при нажатии. Цвет 1 - background_color_gradient_key_toggle_menu_1_focus*/
        /*Цвет и прозрачность фона с градиентом кнопки развертки меню при нажатии. Цвет 2 - background_color_gradient_key_toggle_menu_2_focus*/
        background: linear-gradient('.$themeMenu['background_color_gradient_key_toggle_menu_position_focus'].', rgba('.$themeMenu['background_color_gradient_key_toggle_menu_1_focus'].') 0%, rgba('.$themeMenu['background_color_gradient_key_toggle_menu_2_focus'].') 100%);
    }
    #custom-bootstrap-menu .navbar-toggle .icon-bar
    {
        /*Цвет и прозрачность трех горизонтальных рисак в кнопке развертки меню - background_color_icon_bar_key_toggle_menu*/
        background-color: rgba('.$themeMenu['background_color_icon_bar_key_toggle_menu'].');
    }
    #custom-bootstrap-menu .navbar-toggle:hover .icon-bar
    {
        /*Цвет и прозрачность трех горизонтальных рисак в кнопке развертки меню при наведении - background_color_icon_bar_key_toggle_menu_hover*/
        background-color: rgba('.$themeMenu['background_color_icon_bar_key_toggle_menu_hover'].');
    }
    #custom-bootstrap-menu .navbar-toggle:focus .icon-bar
    {
        /*Цвет и прозрачность трех горизонтальных рисак в кнопке развертки меню при нажатии - background_color_icon_bar_key_toggle_menu_focus*/
        background-color: rgba(<'.$themeMenu['background_color_icon_bar_key_toggle_menu_focus'].');
    }
    ';
    }else {
    echo '
    #custom-bootstrap-menu.navbar-default .navbar-brand {
        color: rgba(119, 119, 119, 1);
    }
    #custom-bootstrap-menu.navbar-default {
        font-size: 14px;
        background-color: rgba(248, 248, 248, 1);
        border-width: 1px;
        border-radius: 4px;
    }
    #custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
        color: rgba(119, 119, 119, 1);
        background-color: rgba(248, 248, 248, 0);
    }
    #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
    #custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
        color: rgba(51, 51, 51, 1);
        background-color: rgba(248, 248, 248, 0);
    }
    #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
    #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
    #custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
        color: rgba(85, 85, 85, 1);
        background-color: rgba(231, 231, 231, 1);
    }
    #custom-bootstrap-menu.navbar-default .navbar-toggle {
        border-color: #ddd;
    }
    #custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
    #custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
        background-color: #ddd;
    }
    #custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
        background-color: #888;
    }
    #custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
    #custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
        background-color: #888;
    }
    ';
    }
    ?>

</style>