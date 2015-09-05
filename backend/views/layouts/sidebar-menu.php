<?php

/**
 * Sidebar menu layout.
 *
 * @var \yii\web\View $this View
 */

use vova07\themes\admin\widgets\Menu;

echo Menu::widget(
    [
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => 'Пользователи',
                'url' => ['#'],
                'icon' => 'fa-users',
                'visible' => Yii::$app->user->can('admin'),
                'items' => [
                    [
                        'label' => 'Пользователи',
                        'url' => ['/user/index'],
                        'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('BViewComments'),
                    ],
                    [
                        'label' => 'Роли',
                        'url' => ['/rbac/index'],
                        'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('BViewCommentsModels'),
                    ]
                ]
            ],
            [
                'label' => 'Тема сайта',
                'url' => ['#'],
                'icon' => 'fa-picture-o ',
                'visible' => Yii::$app->user->can('admin'),
                'items' => [
                    [
                        'label' => 'Тело сайта',
                        'url' => ['/theme_body/index'],
                        'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('BViewCommentsModels'),
                    ],
                    [
                        'label' => 'Главное меню',
                        'url' => ['/theme_menu/index'],
                        'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('BViewComments'),
                    ],
                    [
                        'label' => 'Подвал',
                        'url' => ['/theme_footer/index'],
                        'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('BViewComments'),
                    ],
                ]
            ],
        ]
    ]
);