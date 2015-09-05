<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = $name;
?>
<div class="site-error" style="margin-top: 70px;">

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        Произошла ошибка при обработки вашего запроса.
    </p>
    <p>
        Пожалуйста, свяжитесь с нами, если вы думаете, что это ошибка сервера. Спасибо.
    </p>

</div>
