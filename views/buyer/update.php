<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Buyer */

$this->title = 'Изменить покупателя: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Покупателя', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменить';
?>
<div class="buyer-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
