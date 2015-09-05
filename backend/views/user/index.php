<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use common\models\User;
use yii\grid\ActionColumn;
use common\models\AuthAssignment;
/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Регистрация', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'class' => 'yii\grid\SerialColumn',
                'header' => '№'
            ],
            'id',
            'username',
            'name',
            'surname',
            'email:email',
            [
                'attribute' => 'rule.item_name',
                'filter' => User::getRuleName(),
                'format' => 'raw',
                'value' => function ($model) {
                    if($model->rule['item_name'] == 'admin') {
                        return '<p class="text-danger">Администратор</p>';
                    }
                    return '<p class="text-success">Пользователь</p>';
                }
            ],
            [
                'attribute' => 'status',
                'filter' => User::getStatus(),
                'format' => 'raw',
                'value' => function ($model) {
                    if($model->status == 10) {
                        return '<span class="glyphicon glyphicon-ok-circle" style="color: green;margin-left: 45px;"></span>';
                    }
                    return '<span class="glyphicon glyphicon-ban-circle" style="color: red;margin-left: 45px;"></span>';
                }
            ],
            [
                'attribute' => 'created_at',
                'filter' => false,
            ],
            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',

            ],
        ],
    ]); ?>

</div>