<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\companytable */

$this->title = 'Update Companytable: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Companytables', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->No]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="companytable-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
