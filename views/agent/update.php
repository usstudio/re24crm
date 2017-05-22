<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Agent */

$this->title = 'Изменить агента №'.$model->id.': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Агенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="agent-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
