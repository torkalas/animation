<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use vova07\fileapi\Widget as FileAPI;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста, заполните следующие поля, чтобы зарегистрироваться:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                'enableClientValidation' => false,
            ]); ?>
            <?= $form->field($model, 'name')->label('Имя') ?>
            <?= $form->field($model, 'surname')->label('Фамилия') ?>
            <?= $form->field($model, 'username')->label('Логин') ?>
            <?= $form->field($model, 'email')->label('E-mail') ?>
            <?= $form->field($model, 'password')->label('Пароль')?>
            <?= $form->field($model, 'repassword')->label('Повторить пароль')?>
            <?= $form->field($model, 'avatar_url')->widget(
                FileAPI::className(),
                [
                    'settings' => [
                        'lang' => 'ru',
                        'url' => ['/site/fileapi-upload']
                    ],
                    'crop' => true,
                    'cropResizeWidth' => 100,
                    'cropResizeHeight' => 100,

                ]
            );?>
            <div class="form-group">
                <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
