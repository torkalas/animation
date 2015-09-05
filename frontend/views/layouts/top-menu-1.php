<?php

/**
 * Top menu view.
 *
 * @var \yii\web\View $this View
 */

use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

NavBar::begin([
    'brandLabel' => '<span class="glyphicon glyphicon-star"></span> Frontend',
    'brandUrl' => Yii::$app->homeUrl,
    'id' => 'custom-bootstrap-menu',
    'options' => [
        'class' => 'navbar navbar-default',
    ],
]);

$menuItems = [
    [
        'label' => '<span class="glyphicon glyphicon-home"></span>',
        'url' => ['/site/index'],
    ],
    [
        'label' => '<span class="glyphicon glyphicon-wrench"></span>',
        'url' => ['/admin'],
        'title' => 'Админ-панель',
        'visible' => Yii::$app->user->can('admin'),
    ],
    [
        'label' => '<b>Проекты</b>',
        'url' => ['/projects/index'],
    ],
    [
        'label' => '<b>Магазин</b>',
        'url' => ['/shop/index'],
    ],
    [
        'label' => '<b>О Компании</b>',
        'url' => ['/site/about'],
    ],
    //Обратная связь//
    [
        'label' => '<b>Контакты</b>',
        'url' => ['/site/contact'],
        //'visible' => false,
    ],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] =
        [
            'label' => '<b>Регистрация</b>',
            'url' => ['/site/signup']
        ];
    $menuItems[] =
        [
            'label' => '<b>Вход</b>',
            'url' => ['/site/login']
        ];
} else {
    $menuItems[] =
        [
            'label' => '<span class="glyphicon glyphicon-user"></span> (' . Yii::$app->user->identity->username . ')',
            'items' => [
                [
                    'label' => '<span class="glyphicon glyphicon-log-out"></span> Выход',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post'],
                    'class' => 'dropdown-menu'
                ],
                [
                    'label' => 'Профиль',
                    'url' => ['/user/' . Yii::$app->user->identity->id],
                    'class' => 'dropdown-menu'
                ],
            ]
        ];
}
echo Nav::widget([
    'encodeLabels' => false,
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => $menuItems,
]);
NavBar::end();