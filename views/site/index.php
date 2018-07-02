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
        <h1 id="z"><?= $var ?></h1>

        <!--p id="bb" class="lead">You have successfully created your Yii-powered application.</p-->

        <p id="mybut" class="btn btn-lg btn-success">OK</p>
    </div>
    <div class="container col-xs-12">
        <label  class="control-label col-xs-2">Введите ваше имя</label>

        <textarea class="form-control" name="inputext" id="inputext"> </textarea></div>

<form action="getter.php" method="POST">
    <input class="btn btn-lg btn-success" type="submit" name="send" value ="отправить"> </input>
</form>
    <div class="table">
        <label id="tablenames" class="lead">Пользователи нашего сайта</label>
        <?php foreach ($users as $user): ?>
            <div class="th">
                <?= Html::encode("{$user->name}") ?>
                <!--?= $user->id ?-->
            </div>
        <?php endforeach; ?>
    </div>

    <!--div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div-->
</div>

