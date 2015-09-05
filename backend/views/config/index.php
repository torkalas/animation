<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Конфигурация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container config-index">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nav_menu',
        ],
    ]) ?>

</div>
