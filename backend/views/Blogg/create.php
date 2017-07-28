<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Blogg */

$this->title = 'Create Blogg';
$this->params['breadcrumbs'][] = ['label' => 'Bloggs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogg-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
