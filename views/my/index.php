<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */

$this->title = 'Site';
$default='';
$this->registerJsFile('@web/js/main-index.js',['position'=>$this::POS_END],'main-index');
//$this->registerJs('alert("Привет мир")',$this::POS_READY,'hello-message');
$this->registerCssFile('@web/css/site.css');
?>

<p class="site-index" xmlns="http://www.w3.org/1999/html">

<div class="jumbotron">
    <?= $hi ?>
</div>
</p>