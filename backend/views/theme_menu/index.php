<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\ThemeMenu;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ThemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тема';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]);?>

    <p>
        <?= Html::a('Создать тему', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'active',
            // 'font_size_menu',
            // 'background_color_menu',
            // 'background_color_gradient_menu_position',
            // 'background_color_gradient_menu_1',
            // 'background_color_gradient_menu_2',
            // 'background_image_menu_url:url',
            // 'opacity_background_image_menu',
            // 'border_width_menu',
            // 'border_radius_menu',
            // 'border_color_menu',
            // 'font_color_brand',
            // 'font_size_brand',
            // 'brand_url:url',
            // 'font_color_brand_focus',
            // 'font_color_brand_hover',
            // 'font_color_key_menu',
            // 'background_color_key_menu',
            // 'background_color_gradient_key_menu_position',
            // 'background_color_gradient_key_menu_1',
            // 'background_color_gradient_key_menu_2',
            // 'border_radius_key_menu',
            // 'font_color_key_menu_hover',
            // 'background_color_key_menu_hover',
            // 'background_color_gradient_key_menu_position_hover',
            // 'background_color_gradient_key_menu_1_hover',
            // 'background_color_gradient_key_menu_2_hover',
            // 'font_color_key_menu_focus',
            // 'background_color_key_menu_focus',
            // 'background_color_gradient_key_menu_position_focus',
            // 'background_color_gradient_key_menu_1_focus',
            // 'background_color_gradient_key_menu_2_focus',
            // 'font_color_key_menu_active',
            // 'background_color_key_menu_active',
            // 'background_color_gradient_key_menu_position_active',
            // 'background_color_gradient_key_menu_1_active',
            // 'background_color_gradient_key_menu_2_active',
            // 'border_color_key_toggle_menu',
            // 'border_width_key_toggle_menu',
            // 'background_color_key_toggle_menu_hover',
            // 'background_color_gradient_key_toggle_menu_position_hover',
            // 'background_color_gradient_key_toggle_menu_1_hover',
            // 'background_color_gradient_key_toggle_menu_2_hover',
            // 'background_color_key_toggle_menu_focus',
            // 'background_color_gradient_key_toggle_menu_position_focus',
            // 'background_color_gradient_key_toggle_menu_1_focus',
            // 'background_color_gradient_key_toggle_menu_2_focus',
            // 'background_color_icon_bar_key_toggle_menu',
            // 'background_color_icon_bar_key_toggle_menu_hover',
            // 'background_color_icon_bar_key_toggle_menu_focus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
