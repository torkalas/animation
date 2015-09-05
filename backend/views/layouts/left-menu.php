<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
<?php

use common\widgets\Menu;

echo Menu::widget(
    [
        'encodeLabels' => false,
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => '<span class="span-menu">Админ-панель</span>',
                'url' => ['/site/index'],
                'glyphicon' => 'glyphicon-dashboard',
                'visible' => Yii::$app->user->can('admin'),
            ],
            [
                'label' => '<span class="span-menu">Главная</span>',
                'url' => ['../site/index'],
                'glyphicon' => 'glyphicon-home',
                'visible' => Yii::$app->user->can('admin'),

            ],
            [
                'label' => '<span class="span-menu">Настройки</span>',
                'url' => ['#'],
                'glyphicon' => 'glyphicon-cog',
                'visible' => Yii::$app->user->can('admin'),
                'items' => [
                    [
                        'label' => '<span class="span-menu">Конфигурация</span>',
                        'url' => ['/config/index'],
                        'glyphicon' => 'glyphicon-tasks',
                        'visible' => Yii::$app->user->can('admin'),
                    ],
                    [
                        'label' => '<span class="span-menu">Главное меню</span>',
                        'url' => ['/theme_menu/index'],
                        'visible' => Yii::$app->user->can('admin'),
                    ],
                    [
                        'label' => '<span class="span-menu">Тело сайта</span>',
                        'url' => ['/theme_body/index'],
                        'glyphicon' => 'glyphicon-picture',
                        'visible' => Yii::$app->user->can('admin'),
                    ],
                    [
                        'label' => '<span class="span-menu">Подвал</span>',
                        'url' => ['/theme_footer/index'],
                        'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('BViewComments'),
                    ],
                ]
            ],
            [
                'label' => '<span class="span-menu">Пользователи</span>',
                'url' => ['#'],
                'glyphicon' => 'glyphicon-user',
                'visible' => Yii::$app->user->can('admin'),
                'items' => [
                    [
                        'label' => '<span class="span-menu">Пользователи</span>',
                        'url' => ['/user/index'],
                        'visible' => Yii::$app->user->can('admin'),
                    ],
                    [
                        'label' => '<span class="span-menu">Роли</span>',
                        'url' => ['/rbac/index'],
                        'visible' => Yii::$app->user->can('admin'),
                    ]
                ]
            ],
        ]
    ]
);?>
    </section>
    <!-- /.sidebar -->
</aside>