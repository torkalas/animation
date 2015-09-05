<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <p>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить этого пользователя?',
                'method' => 'post',
            ],
        ])
        ?>
        <?php
            if ($model->status == 10) {
                echo Html::a('Забанить', ['ban', 'id' => $model->id], [
                    'class' => 'btn btn-warning',
                    'data' => [
                        'confirm' => 'Вы действительно хотите забанить этого пользователя?',
                        'method' => 'post',
                    ],
                ]);
            }else {
                echo Html::a('Снять бан', ['lift', 'id' => $model->id], [
                'class' => 'btn btn-info',
                'data' => [
                    'confirm' => 'Вы действительно хотите снять бан с этого пользователя?',
                    'method' => 'post',
                ],
            ]);
            }
        ?>
        <?= Html::a('Редактировать профиль', ['update', 'id' => $model->id], [
            'class' => 'btn btn-primary',
        ])
        ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'surname',
            'username',
            [
                'attribute' => 'rule.item_name',
            ],
            'email:email',
            [
                'label' => 'Статус',
                'value' => $model->getStatusName()
            ],
            'created_at',
        ],
    ]) ?>

</div>