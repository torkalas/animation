<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Theme */

$this->title = 'Создать тему';
$this->params['breadcrumbs'][] = ['label' => 'Тема', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theme-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
