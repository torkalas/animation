<?php

/**
 * Head layout.
 */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use common\models\ThemeMenu;
?>
<title><?= Html::encode($this->title); ?></title>
<?= Html::csrfMetaTags(); ?>
<?php $this->head(); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<?php AppAsset::register($this);

$this->registerMetaTag(
    [
        'charset' => Yii::$app->charset
    ]
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => Url::canonical()
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'stylesheet',
        'type' => 'text/css',
        'href' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'
    ]
);
$this->registerLinkTag(
    [
        'rel' => 'stylesheet',
        'type' => 'text/css',
        'href' => 'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'
    ]
);
$this->registerLinkTag(
    [
        'type' => 'text/javascript',
        'href' => 'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js'
    ]
);
$this->registerLinkTag(
    [
        'type' => 'text/javascript',
        'href' => 'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'
    ]
);
$this->registerLinkTag(
    [
        'type' => 'text/javascript',
        'href' => 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js'
    ]
); ?>