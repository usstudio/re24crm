<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Owner */

$this->title = 'Изменить собственника: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Собственники', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="owner-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
