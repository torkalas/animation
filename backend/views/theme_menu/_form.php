<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Theme */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="theme-form">

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#menu" data-toggle="tab">Меню</a></li>
    <li><a href="#logo" data-toggle="tab">Бренд</a></li>
    <li><a href="#key" data-toggle="tab">Кнопки</a></li>
    <li><a href="#toggle" data-toggle="tab">Кнопка развертки</a></li>
</ul>
<br />
<!-- Tab panes -->
<div class="tab-content">
<div class="tab-pane active" id="menu">
    <div class="panel-group" id="accordion-menu">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-menu" href="#collapseOne-menu">
                        Основное
                    </a>
                </h4>
            </div>
            <div id="collapseOne-menu" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'active')->textInput() ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>                        </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-menu" href="#collapseTwo-menu">
                        Шрифт
                    </a>
                </h4>
            </div>
            <div id="collapseTwo-menu" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'font_size_menu')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-menu" href="#collapseThree-menu">
                        Фон
                    </a>
                </h4>
            </div>
            <div id="collapseThree-menu" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'background_color_menu')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-menu2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-menu2" href="#collapseOne-menu2">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-menu2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_menu_position')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_menu_1')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_menu_2')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-menu" href="#collapseFour-menu">
                        Рамка
                    </a>
                </h4>
            </div>
            <div id="collapseFour-menu" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'border_width_menu')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'border_radius_menu')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'border_color_menu')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-menu" href="#collapseFive-menu">
                        Картинка
                    </a>
                </h4>
            </div>
            <div id="collapseFive-menu" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'background_image_menu_url')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'opacity_background_image_menu')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="logo">
    <div class="panel-group" id="accordion-logo">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-logo" href="#collapseOne-logo">
                        Шрифт
                    </a>
                </h4>
            </div>
            <div id="collapseOne-logo" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'font_size_brand')->textInput() ?>
                    <?= $form->field($model, 'font_color_brand')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'font_color_brand_hover')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'font_color_brand_focus')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-logo" href="#collapseTwo-logo">
                        Картинка
                    </a>
                </h4>
            </div>
            <div id="collapseTwo-logo" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'brand_url')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="key">
    <div class="panel-group" id="accordion-key">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-key" href="#collapseOne-key">
                        Основное
                    </a>
                </h4>
            </div>
            <div id="collapseOne-key" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'border_radius_key_menu')->textInput() ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-key" href="#collapseTwo-key">
                        Шрифт
                    </a>
                </h4>
            </div>
            <div id="collapseTwo-key" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'font_color_key_menu')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'font_color_key_menu_active')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'font_color_key_menu_hover')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'font_color_key_menu_focus')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-key" href="#collapseThree-key">
                        Фон
                    </a>
                </h4>
            </div>
            <div id="collapseThree-key" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'background_color_key_menu_active')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-gradient-key-active">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-gradient-key-active" href="#collapseOne-gradient-key-active">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-gradient-key-active" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_key_menu_position_active')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_1_active')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_2_active')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $form->field($model, 'background_color_key_menu')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-gradient-key">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-gradient-key" href="#collapseOne-gradient-key">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-gradient-key" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_key_menu_position')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_1')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_2')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $form->field($model, 'background_color_key_menu_hover')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-gradient-key-hover">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-gradient-key-hover" href="#collapseOne-gradient-key-hover">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-gradient-key-hover" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_key_menu_position_hover')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_1_hover')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_2_hover')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $form->field($model, 'background_color_key_menu_focus')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-gradient-key-focus">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-gradient-key-focus" href="#collapseOne-gradient-key-focus">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-gradient-key-focus" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_key_menu_position_focus')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_1_focus')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_menu_2_focus')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane" id="toggle">
    <div class="panel-group" id="accordion-toggle">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-toggle" href="#collapseOne-toggle">
                        Шрифт
                    </a>
                </h4>
            </div>
            <div id="collapseOne-toggle" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'background_color_icon_bar_key_toggle_menu')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'background_color_icon_bar_key_toggle_menu_hover')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'background_color_icon_bar_key_toggle_menu_focus')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-toggle" href="#collapseTwo-toggle">
                        Рамка
                    </a>
                </h4>
            </div>
            <div id="collapseTwo-toggle" class="panel-collapse collapse">
                <div class="panel-body">
                    <?= $form->field($model, 'border_color_key_toggle_menu')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'border_width_key_toggle_menu')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion-toggle" href="#collapseThree-toggle">
                        Фон
                    </a>
                </h4>
            </div>
            <div id="collapseThree-toggle" class="panel-collapse collapse">
                <div class="panel-body">

                    <?= $form->field($model, 'background_color_key_toggle_menu_hover')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-gradient-toggle-focus">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-gradient-toggle-focus" href="#collapseOne-gradient-toggle-focus">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-gradient-toggle-focus" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_key_toggle_menu_position_hover')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_toggle_menu_1_hover')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_toggle_menu_2_hover')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= $form->field($model, 'background_color_key_toggle_menu_focus')->textInput(['maxlength' => true]) ?>
                    <div class="panel-group" id="accordion-gradient-toggle-focus">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-gradient-toggle-focus" href="#collapseOne-gradient-toggle-focus">
                                        Градиент
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne-gradient-toggle-focus" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?= $form->field($model, 'background_color_gradient_key_toggle_menu_position_focus')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_toggle_menu_1_focus')->textInput(['maxlength' => true]) ?>
                                    <?= $form->field($model, 'background_color_gradient_key_toggle_menu_2_focus')->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div>
        </div>
    </div>
</div>
</div>
<br />
<div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>
<?php ActiveForm::end(); ?>
</div>
