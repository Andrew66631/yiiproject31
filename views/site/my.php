<?php
use yii\helpers\Html;

$this->title = 'My';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-my">
<h1><?= Html::encode($this->title) ?></h1>
</div>
<?= Html::encode($message) ?>
