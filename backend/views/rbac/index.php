<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\daterange\DateRangePicker;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AuthAssignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Роли';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'item_name',
                'format' => 'raw',
                'value' => function ($model) {
                    if($model->itemRuName['ru_name'] == 'Администратор') {
                        return '<p class="text-danger">' . $model->itemRuName['ru_name'] . '</p>';
                    }
                    return '<p class="text-success">' . $model->itemRuName['ru_name'] . '</p>';
                }
            ],
            [
                'attribute' => 'user_id',
                'value' => 'userName.username',
            ],
            [
                'attribute' => 'created_at',
                'value' => 'created_at',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
            ],
        ],
    ]); ?>

</div>