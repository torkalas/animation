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
    <?= $form->field($model, 'name')->label('Имя') ?>
    <?= $form->field($model, 'surname')->label('Фамилия') ?>
    <?= $form->field($model, 'status')->dropDownList(
        User::getStatus(),
        ['prompt' => 'Выберите статус']
    ) ?>


    <div class="form-group">
        <?= Html::submitButton('Редактировать', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>