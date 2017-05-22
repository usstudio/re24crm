<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Покупатели';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buyer-index">


    <p>
        <?= Html::a('Создать покупателя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'email:ntext',
            'phone:ntext',
            'price_from',
             'price_to',
            'type_object'=>[
                'attribute'=>'type_object',
                'format' => 'html',
                'contentOptions' =>['class' => 'table_class1','style'=>'display:block;'],
                'content'=>function($data){
                    $type = \app\models\ObjectsType::getById($data->type_object);

                    return $type['name'];
                }
            ],
             'agent'=>[
                 'attribute'=>'agent',
                 'format' => 'html',
                 'content'=>function($data){
                     $agent = \app\models\Agent::getById($data->agent);
                     $html =  Html::a( $agent['name'], $url = '/agent/view?id='.$data->agent, $options = [] );
                     return $html;
                 }
             ],
             'comment:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
