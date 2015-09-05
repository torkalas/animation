<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AuthAssignment */

$this->title = 'Редактирование роли: ' . ' ' . $model->item_name;
$this->params['breadcrumbs'][] = ['label' => 'Роли', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->item_name, 'url' => ['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="auth-assignment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>