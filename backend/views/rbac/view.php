<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\AuthAssignment */

$this->title = $model->item_name;
$this->params['breadcrumbs'][] = ['label' => 'Роли', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'item_name' => $model->item_name, 'user_id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'item_name' => $model->item_name, 'user_id' => $model->user_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить эту роль?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'item_name',
            [
                'attribute' => 'item_name',
                'value' => 'itemRuName.ru_name'
                //'value' => function ($model) {
                //    if($model->itemRuName['ru_name'] == 'Администратор') {
                //        return '<p class="text-danger">' . $model->itemRuName['ru_name'] . '</p>';
                //    }
                //    return '<p class="text-success">' . $model->itemRuName['ru_name'] . '</p>';
                //}
            ],
            'userName.username',
            'created_at',
        ],
    ]) ?>

</div>