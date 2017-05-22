<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form ActiveForm */
?>

<style>
    .objects-index .filters{
        display: none;
    }
</style>

<div class="objects-index">

    <?php
    if(Yii::$app->request->queryParams){
        $this->title = 'Результаты поиска: ' ;

        \yii\widgets\Pjax::begin(); ?>    <?= \yii\grid\GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                [
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
                 'state',
                //'area',
                // 'image',
                // 'status',
                // 'built',
                //'rooms_count',
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
        ]);
        \yii\widgets\Pjax::end();
    }else{
        $this->title = 'Поиск по объектам: ' ;
    }?>
   </div>
<div class="form-search">
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

</div>