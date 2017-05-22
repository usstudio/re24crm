<?
$dataProvider = new ActiveDataProvider([
    'query' => \app\models\Objects::find(),
    'sort' => ['attributes' => ['column1','column2']]
]);
$res = \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'type',
        'owner'
        // ...
    ],
]);
print_r($res);
?>