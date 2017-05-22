<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AgentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Агенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agent-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?//= Html::a('Создать агента', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'position'=>[
                'attribute'=>'position',
                'format' => 'html',
                'content'=>function($data){
                    $type = \app\models\AgentPosition::getById($data->position);

                    return $type['name'];
                }
            ],
            'type_object'=>[
                'attribute'=>'type_object',
                'format' => 'html',
                'content'=>function($data){
                    $type = \app\models\ObjectsType::getById($data->type_object);

                    return $type['name'];
                }
            ],
            'phone:ntext',
            'email:ntext',
            // 'birthday',
            // 'logo_path:ntext',
            // 'user_id',
            // 'name:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
