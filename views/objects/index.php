<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ObjectsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Объекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objects-index">


    <p>
        <?= Html::a('Создать объект', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
             'type'=>[
                'attribute'=>'type',
                'format' => 'html',
                'contentOptions' =>['class' => 'table_class1','style'=>'display:block;'],
                'content'=>function($data){
                    $type = \app\models\ObjectsType::getById($data->type);

                    return $type['name'];
                }
            ],
            'address:ntext',
            [
                'attribute'=>'owner',
                'format' => 'html',
                'contentOptions' =>['class' => 'table_class','style'=>'display:block;'],
                'content'=>function($data){
                    $owner = \app\models\Owner::getById($data->owner);
                    $html =  Html::a( $owner['name'], $url = '/owner/view?id='.$data->owner, $options = [] );

                    return $html;
                }
            ],
            'price',

            [
                'attribute'=>'agent',
                'format' => 'html',
                'content'=>function($data){
                    $agent = \app\models\Agent::getById($data->agent);
                    $html =  Html::a( $agent['name'], $url = '/agent/view?id='.$data->agent, $options = [] );
                    return $html;
                }
            ],
            // 'state',
            'area',
            // 'image',
            // 'status',
            // 'built',
            'rooms_count',
            // 'bedrooms',
            // 'parking',
            // 'buyer',
            // 'latitude',
            // 'longitude',
            // 'level',
            // 'flour:ntext',
            // 'description:ntext',
            [
                'attribute'=>'metro',
                'format' => 'html',
                'contentOptions' =>['class' => 'table_class1','style'=>'display:block;'],
                'content'=>function($data){
                    $metro = \app\models\ObjectsMetro::getById($data->metro);
                    return $metro['name'];
                }
            ],
            // 'jk',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
