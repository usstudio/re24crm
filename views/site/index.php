<?php

/* @var $this yii\web\View */
use app\models\Objects;

$this->title = '';
$users = \app\models\Objects::find()->one();
$dataProvider = new \yii\data\ArrayDataProvider([
    'allModels' => Objects::find()->all(),
]);
$RES = \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'type',
        'owner'
        // ...
    ],
]);
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Re24CRM приветствует вас !</h1>

        <p class="lead">Хотите увеличить эффективность вашего агентства недвижимости?</p>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h3>Контроль над компанией</h3>
                <p>Руководитель всегда точно знает, что происходит у него в агентстве, видит уязвимые места в процессе
                    продаж, отслеживает наиболее прибыльные сделки и легко находит бездельников.</p>

            </div>
            <div class="col-lg-4">
                <h3>Контроль доступа к информации</h3>

                <p>Вы можете делиться информацией с сотрудниками и клиентами, и в тоже время быть спокойным за
                    сохранение коммерческой тайны.</p>

            </div>
            <div class="col-lg-4">
                <h3>Прозрачность взаимоотношений с клиентами</h3>

                <p>Сервис стыкует объекты, клиентов, риелторов, помнит всю историю продаж. Ни один ваш клиент не
                    останется без внимания, ни один контакт не будет потерян.</p>

            </div>
        </div>

    </div>
</div>
