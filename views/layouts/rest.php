<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

</head>
<body>

<div class="container">
    <?= $content ?>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Тестирование <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
