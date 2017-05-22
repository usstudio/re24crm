<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Buyer */

$this->title = 'Создать покупателя';
$this->params['breadcrumbs'][] = ['label' => 'Покупатели', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyer-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
