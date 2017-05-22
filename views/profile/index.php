<div class="container">
    <div class="resume">
        <header class="page-header">
            <h1 class="page-title">Сотрудник <?=$arProfile->name?></h1>
        </header>
         <?$type = \app\models\ObjectsType::getById($arProfile->type_object);?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        <img class="img-circle img-responsive" alt="" src="/assets/eca8bdb2/img/user2-160x160.jpg">
                                    </figure>

                                </div>

                                <div class="col-xs-12 col-sm-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">Имя: <?=$arProfile->name?></li>
                                        <li class="list-group-item"><i class="fa fa-phone"></i>Телефон: <?=$arProfile->phone?></li>
                                        <li class="list-group-item">День рождения: <?=$arProfile->birthday?></li>
                                        <li class="list-group-item">Тип объектов: <?=$type['name']?> </li>
                                        <li class="list-group-item"><i class="fa fa-envelope"></i> <?=$arProfile->email?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?
if($arProfile->id == Yii::$app->user->id){
    ?>
    <a href="/agent/update?id=<?=Yii::$app->user->id?>" class="btn btn-default btn-flat">Изменить</a>
    <?
}

?>
            </div>
        </div>

    </div>

</div>
