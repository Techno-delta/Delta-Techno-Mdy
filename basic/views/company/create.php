<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\companytable */

$this->title = 'Create Companytable';
$this->params['breadcrumbs'][] = ['label' => 'Companytables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companytable-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
