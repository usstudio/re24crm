<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Owner */

$this->title = 'Создать Собственника';
$this->params['breadcrumbs'][] = ['label' => 'Собственники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="owner-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
