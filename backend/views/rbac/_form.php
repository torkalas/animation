<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\User;
use common\models\AuthItem;

/* @var $this yii\web\View */
/* @var $model common\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->dropDownList(
        ArrayHelper::map(AuthItem::find()->all(),'name','name'),
        ['prompt' => 'Выберите роль']
    ) ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','username'),
        ['prompt' => 'Выберите пользователя']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Назначить роль' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>