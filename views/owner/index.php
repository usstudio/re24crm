<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Собственники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="owner-index">


    <p>
        <?= Html::a('Создать Собственника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name:ntext',
            'email:ntext',
            'phone:ntext',
            'object'=> [
                'attribute'=>'object',
                'format' => 'html',
                'content'=>function($data){
                    $object = \app\models\Objects::getById($data->object);

                    $html =  Html::a( $object['address'], $url = '/objects/view?id='.$data->object, $options = [] );
                    return $html;
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
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
