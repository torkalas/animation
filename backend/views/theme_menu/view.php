<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Theme */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Тема меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-view">

    <p>
        <?= Html::a('Редактирвать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Удалить тему '. $model->name . '?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'active',
            'name',
            'font_size_menu',
            'background_color_menu',
            'background_color_gradient_menu_position',
            'background_color_gradient_menu_1',
            'background_color_gradient_menu_2',
            'background_image_menu_url:url',
            'opacity_background_image_menu',
            'border_width_menu',
            'border_radius_menu',
            'border_color_menu',
            'font_color_brand',
            'font_size_brand',
            'brand_url:url',
            'font_color_brand_focus',
            'font_color_brand_hover',
            'font_color_key_menu',
            'background_color_key_menu',
            'background_color_gradient_key_menu_position',
            'background_color_gradient_key_menu_1',
            'background_color_gradient_key_menu_2',
            'border_radius_key_menu',
            'font_color_key_menu_hover',
            'background_color_key_menu_hover',
            'background_color_gradient_key_menu_position_hover',
            'background_color_gradient_key_menu_1_hover',
            'background_color_gradient_key_menu_2_hover',
            'font_color_key_menu_focus',
            'background_color_key_menu_focus',
            'background_color_gradient_key_menu_position_focus',
            'background_color_gradient_key_menu_1_focus',
            'background_color_gradient_key_menu_2_focus',
            'font_color_key_menu_active',
            'background_color_key_menu_active',
            'background_color_gradient_key_menu_position_active',
            'background_color_gradient_key_menu_1_active',
            'background_color_gradient_key_menu_2_active',
            'border_color_key_toggle_menu',
            'border_width_key_toggle_menu',
            'background_color_key_toggle_menu_hover',
            'background_color_gradient_key_toggle_menu_position_hover',
            'background_color_gradient_key_toggle_menu_1_hover',
            'background_color_gradient_key_toggle_menu_2_hover',
            'background_color_key_toggle_menu_focus',
            'background_color_gradient_key_toggle_menu_position_focus',
            'background_color_gradient_key_toggle_menu_1_focus',
            'background_color_gradient_key_toggle_menu_2_focus',
            'background_color_icon_bar_key_toggle_menu',
            'background_color_icon_bar_key_toggle_menu_hover',
            'background_color_icon_bar_key_toggle_menu_focus',
        ],
    ]) ?>

</div>
