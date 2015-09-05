<?php

/**
 * Top menu view.
 *
 * @var \yii\web\View $this View
 */
use yii\bootstrap\Button;
use yii\helpers\Html;
?>
<aside class="right-side">
    <div class="row">
        <div class="container-fluid" style="background-color: #bebebe">
            <div class="col-xs-12">
                <div class="col-xs-6 pull-left logo">
                    <h1>Jorik-corporation</h1>
                </div>
                <div class="col-xs-6 pull-right contact">
                    <p class="pull-right">Тел 098 11 39 049</p>
                </div>
            </div>
            <div class="col-xs-12">

                <div class="col-xs-6 pull-left">
                    <?= Button::widget([
                        'encodeLabel' => false,
                        'label' => '<span class="glyphicon glyphicon-align-justify">',
                        'options' => [
                            'class' => 'btn-md btn-link sidebar-toggle pull-left',
                            'data-toggle' => 'offcanvas',
                            'role' => 'button',
                            'title' => 'Меню',
                            'style' => 'height: 50px;border-radius: 0px; margin-left: -30px;'
                        ],
                    ]);?>
                </div>
                <div class="col-xs-6 pull-right">
                    <?php if (Yii::$app->user->isGuest) {
                        echo Html::a(
                            ' <span class="glyphicon glyphicon-log-in"></span> Вход',
                            [
                                '/site/login'
                            ],
                            [
                                'class' => 'pull-right',
                                'title' => 'Вход',
                                'style' => 'padding: 15px;'
                            ]
                        );
                        echo Html::a(
                            'Регистрация ',
                            [
                                '/site/signup'
                            ],
                            [
                                'class' => 'pull-right',
                                'title' => 'Регистрация',
                                'style' => 'padding: 15px;'
                            ]
                        );
                    } else {
                        echo Html::a(
                            '<span class="glyphicon glyphicon-log-out"></span> (' . Yii::$app->user->identity->username . ')',
                            [
                                '/site/logout'
                            ],
                            [
                                'onclick' => 'confirm("Выйти?")',
                                'data-method' => 'post',
                                'class' => 'pull-right',
                                'title' => 'Выход',
                                'style' => 'padding: 15px;'
                            ]
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
