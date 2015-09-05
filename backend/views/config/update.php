<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Config */

$this->title = 'Редактировать: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Конфигурация', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="config-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
