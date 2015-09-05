<?php

use common\widgets\Menu;
use yii\bootstrap\Button;

?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
<?php

echo Menu::widget(
    [
        'encodeLabels' => false,
        'options' => [
            'class' => 'sidebar-menu'
        ],
        'items' => [
            [
                'label' => '<span class="span-menu">Главная</span>',
                'url' => Yii::$app->homeUrl,
                'glyphicon' => 'glyphicon-home',
            ],
            [
                'label' => '<span class="span-menu">Админ-панель</span>',
                'url' => ['/admin'],
                'glyphicon' => 'glyphicon-dashboard',
                'visible' => Yii::$app->user->can('admin'),
            ],
            [
                'label' => '<span class="span-menu">Проекты</span>',
                'url' => ['/project/index'],
                'glyphicon' => 'glyphicon-briefcase',
            ],
            [
                'label' => '<span class="span-menu">Магазин</span>',
                'url' => ['/shop/index'],
                'glyphicon' => 'glyphicon-shopping-cart',
            ],
            [
                'label' => '<span class="span-menu">Контакты</span>',
                'url' => ['/site/contact'],
                'glyphicon' => 'glyphicon-envelope',
                //'visible' => false,
            ],
            [
                'label' => '<span class="span-menu">Выход</span>',
                'url' => ['/site/contact'],
                'glyphicon' => 'glyphicon-log-out',
                'visible' => !Yii::$app->user->isGuest,
            ],
            [
                'label' => '<span class="span-menu">Вход</span>',
                'url' => ['/site/login'],
                'glyphicon' => 'glyphicon-log-in',
                'visible' => Yii::$app->user->isGuest,
            ],
            [
                'label' => '<span class="span-menu">Регистрация</span>',
                'url' => ['/site/signup'],
                'glyphicon' => 'glyphicon-book',
                'visible' => Yii::$app->user->isGuest,
            ],

        ]
    ]
);?>
    </section>
    <!-- /.sidebar -->
</aside>