<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tiji */

$this->title = 'Update Tiji: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tijis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => (string)$model->_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
