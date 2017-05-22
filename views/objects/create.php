<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Objects */

$this->title = 'Добавить объект';
$this->params['breadcrumbs'][] = ['label' => 'Objects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
