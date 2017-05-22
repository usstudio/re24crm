<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */

$this->title = 'Просмотр объекта №'.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Объекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-view">


    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ;
        $agent = \app\models\Agent::getById($model->agent);
        $model->agent = $agent['name'];
        $owner = \app\models\Owner::getById($model->owner);
        $model->owner = $owner['name'];
        $status = \app\models\ObjectsStatus::getById($model->status);
        $model->status = $status['name'];

        $type = \app\models\ObjectsType::getById($model->type);
        $model->type = $type['name'];
        $metro = \app\models\ObjectsMetro::getById($model->metro);
        $model->metro =  $metro['name'];
        $jk = \app\models\ObjectsJK::getById($model->jk);
        $model->jk =  $jk['name'];
        $buyer = \app\models\Buyer::getById($model->buyer);
        $model->buyer =  $buyer['name'];
        $state = \app\models\ObjectsState::getById($model->state);
        $model->state =  $state['name'];
            if($model->parking == 1) $model->parking = 'Да';
            else
                $model->parking = 'Нет';
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'type',
            'owner',
            'agent',
            'price',
            'address:ntext',
            'state',
            'area',
            'image',
            'status',
            'built',
            'rooms_count',
            'bedrooms',
            'parking',
            'buyer',
            'latitude',
            'longitude',
            'level',
            'flour:ntext',
            'description:ntext',
            'metro',
            'jk',
        ],
    ]) ?>

</div>
