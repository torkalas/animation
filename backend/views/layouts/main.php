<?php

/**
 * Theme main layout.
 *
 * @var \yii\web\View $this View
 * @var string $content Content
 */

use vova07\themes\site\widgets\Alert;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <?= $this->render('//layouts/head') ?>
    </head>
    <body class="skin-blue fixed sidebar-mini sidebar-collapse">
    <?php $this->beginBody(); ?>

    <div class="wrapper">

        <?= $this->render('//layouts/left-menu') ?>

        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">

            <?= $this->render('//layouts/top-menu') ?>

            <!-- Content Header (Page header) -->
            <div class="h1-breadcrumbs col-xs-12" style="background-color: #0782C1">
                <div class="col-lg-5 pull-left">
                <h1>
                    <?= $this->title ?>
                    <?php if (isset($this->params['subtitle'])) : ?>
                        <small><?= $this->params['subtitle'] ?></small>
                    <?php endif; ?>
                </h1>
                    </div>
                        <div class="col-lg-7 pull-right">
                <?= Breadcrumbs::widget(
                    [
                        'homeLink' => [
                            'label' => '<span class="glyphicon glyphicon-dashboard"></span> Админ-панель',
                            'url' => '/admin'
                        ],
                        'encodeLabels' => false,
                        'tag' => 'ol',
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                    ]
                ) ?>
                    </div>
            </div>

            <!-- Main content -->
            <section class="content">
                <?= Alert::widget(); ?>
                <?= $content ?>
            </section><!-- /.content -->
        </aside><!-- /.right-side -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; <?= date('Y')?> Jorik.</strong> All rights reserved.
    </footer>
    </div><!-- ./wrapper -->

    <script>
        //$.widget.bridge('uibutton', $.ui.button);
    </script>

    <?php $this->endBody(); ?>
    </body>
    </html>
<?php $this->endPage(); ?>