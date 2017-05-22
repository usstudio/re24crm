<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Owner */

$this->title = 'Собственник: '.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Собственники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$object = \app\models\Objects::getById($model->object);
$agent = \app\models\Agent::getById($model->agent);
$model->object = $object['address'];
$model->agent = $agent['name'];
?>
<div class="owner-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name:ntext',
            'email:ntext',
            'phone:ntext',
            'object',
            'agent',
        ],
    ]) ?>

</div>
