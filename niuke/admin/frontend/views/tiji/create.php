<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiji */

$this->title = 'Create Tiji';
$this->params['breadcrumbs'][] = ['label' => 'Tijis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiji-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
