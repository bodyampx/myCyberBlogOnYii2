<?php

/* @var $this yii\web\View */

$this->title = 'Мой бложик на yii2';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Ура!</h1>

        <p class="lead">Удалось.</p>


    </div>

    <div class="body-content">

        <div class="row">
<?php foreach ($blogs as $one):?>
    <div class="col-lg-4">
    <h2><?=$one->title?></h2>
    <?=$one->text?>
    </div>
<?php endforeach;  ?>
        </div>

    </div>
</div>
