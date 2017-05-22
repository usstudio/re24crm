<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contracts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contract', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_trans'=>[
                'attribute'=>'id_trans',
                'format' => 'html',
                'content'=>function($data){
                    $trans = \app\models\Trans::getById($data->id_trans);
                    $html =  Html::a( $trans['id'], $url = '/owner/view?id='.$data->id_trans, $options = [] );

                    return $html;
                }
            ],
            'owner'=>[
                'attribute'=>'owner',
                'format' => 'html',
                'content'=>function($data){
                    $owner = \app\models\Owner::getById($data->owner);
                    $html =  Html::a( $owner['name'], $url = '/owner/view?id='.$data->owner, $options = [] );

                    return $html;
                }
            ],
            'buyer' =>[
                'attribute'=>'buyer',
                'format' => 'html',
                'content'=>function($data){
                    $buyer = \app\models\Buyer::getById($data->buyer);
                    $html =  Html::a( $buyer['name'], $url = '/buyer/view?id='.$data->buyer, $options = [] );
                    return $html;
                }
            ],
            'object'=>[
                'attribute'=>'object',
                'format' => 'html',
                'content'=>function($data){
                    $object = \app\models\Objects::getById($data->object);
                    if(! $object['id']) return false;
                    $html =  Html::a( '['.$object['id'].'] '.$object['address'], $url = '/objects/view?id='.$data->object, $options = [] );
                    return $html;
                }
            ],
             'title:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
