<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ThemeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="theme-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'active') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'font_size_menu') ?>

    <?= $form->field($model, 'background_color_menu') ?>

    <?php // echo $form->field($model, 'background_color_gradient_menu_position') ?>

    <?php // echo $form->field($model, 'background_color_gradient_menu_1') ?>

    <?php // echo $form->field($model, 'background_color_gradient_menu_2') ?>

    <?php // echo $form->field($model, 'background_image_menu_url') ?>

    <?php // echo $form->field($model, 'opacity_background_image_menu') ?>

    <?php // echo $form->field($model, 'border_width_menu') ?>

    <?php // echo $form->field($model, 'border_radius_menu') ?>

    <?php // echo $form->field($model, 'border_color_menu') ?>

    <?php // echo $form->field($model, 'font_color_brand') ?>

    <?php // echo $form->field($model, 'font_size_brand') ?>

    <?php // echo $form->field($model, 'brand_url') ?>

    <?php // echo $form->field($model, 'font_color_brand_focus') ?>

    <?php // echo $form->field($model, 'font_color_brand_hover') ?>

    <?php // echo $form->field($model, 'font_color_key_menu') ?>

    <?php // echo $form->field($model, 'background_color_key_menu') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_position') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_1') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_2') ?>

    <?php // echo $form->field($model, 'border_radius_key_menu') ?>

    <?php // echo $form->field($model, 'font_color_key_menu_hover') ?>

    <?php // echo $form->field($model, 'background_color_key_menu_hover') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_position_hover') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_1_hover') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_2_hover') ?>

    <?php // echo $form->field($model, 'font_color_key_menu_focus') ?>

    <?php // echo $form->field($model, 'background_color_key_menu_focus') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_position_focus') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_1_focus') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_2_focus') ?>

    <?php // echo $form->field($model, 'font_color_key_menu_active') ?>

    <?php // echo $form->field($model, 'background_color_key_menu_active') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_position_active') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_1_active') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_menu_2_active') ?>

    <?php // echo $form->field($model, 'border_color_key_toggle_menu') ?>

    <?php // echo $form->field($model, 'border_width_key_toggle_menu') ?>

    <?php // echo $form->field($model, 'background_color_key_toggle_menu_hover') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_toggle_menu_position_hover') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_toggle_menu_1_hover') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_toggle_menu_2_hover') ?>

    <?php // echo $form->field($model, 'background_color_key_toggle_menu_focus') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_toggle_menu_position_focus') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_toggle_menu_1_focus') ?>

    <?php // echo $form->field($model, 'background_color_gradient_key_toggle_menu_2_focus') ?>

    <?php // echo $form->field($model, 'background_color_icon_bar_key_toggle_menu') ?>

    <?php // echo $form->field($model, 'background_color_icon_bar_key_toggle_menu_hover') ?>

    <?php // echo $form->field($model, 'background_color_icon_bar_key_toggle_menu_focus') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
