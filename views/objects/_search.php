<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ObjectsSearch */
/* @var $form yii\widgets\ActiveForm */

$arType = array(''=>'Не выбрано');
$arAgent = array(''=>'Не выбран');
$arState = array(''=>'Не выбрано');
$arStatus = array(''=>'Не выбран');
$arJK = array(''=>'Не выбран');
$arBuyer = array(''=>'Не выбран');
$arOwner = array(''=>'Не выбран');

$arOwnerDB = \app\models\Owner::getList();
foreach ($arOwnerDB as $owner){
    $arOwner[$owner['id']] = $owner['name'];
}
$arTypeDB = \app\models\ObjectsType::getList();
foreach ($arTypeDB as $type) {
    $arType[$type['id']] = $type['name'];
}
$arAgentDB = \app\models\Agent::getList();
foreach ($arAgentDB as $agent){
    $arAgent[$agent['id']] = $agent['name'];
}
$arStateDB = \app\models\ObjectsState::getList();
foreach ($arStateDB as $state){
    $arState[$state['id']] = $state['name'];
}
$arStatusDB = \app\models\ObjectsStatus::getList();
foreach ($arStatusDB as $status){
    $arStatus[$status['char']] = $status['name'];
}
$arJKDB = \app\models\ObjectsJK::getList();
foreach ($arJKDB as $jk){
    $arJK[$jk['id']] = $jk['name'];
}
$arMetroDB = \app\models\ObjectsMetro::getList();
$arMetro[''] = 'AAAA';
foreach ($arMetroDB as $metro){
    $arMetro[$metro['id']] = $metro['name'];
}
asort($arMetro);
$arMetro[''] = 'Не выбрано';
$arBuyerDB = \app\models\Buyer::getList();
foreach ($arBuyerDB as $buyer){
    $arBuyer[$buyer['id']] = $buyer['name'];
}
$arParking = array(''=>'Не выбрано','0'=>'Нет','1'=>"да");
?>

<div class="objects-search">

    <?php $form = ActiveForm::begin([
        'action' => ['search'],
        'method' => 'get',
    ]); ?>


    <?= $form->field($model, 'type')->dropDownList($arType) ?>

    <?= $form->field($model, 'owner')->dropDownList($arOwner) ?>

    <?= $form->field($model, 'agent')->dropDownList($arAgent) ?>

    <?= $form->field($model, 'price') ?>

    <?php  echo $form->field($model, 'address') ?>

    <?php  echo $form->field($model, 'state')->dropDownList($arState) ?>

    <?php  echo $form->field($model, 'area') ?>

    <?php  echo $form->field($model, 'status')->dropDownList($arStatus) ?>

    <?php  echo $form->field($model, 'built') ?>

    <?php  echo $form->field($model, 'rooms_count') ?>

    <?php  echo $form->field($model, 'bedrooms') ?>

    <?php  echo $form->field($model, 'parking')->dropDownList($arParking) ?>

    <?php  echo $form->field($model, 'buyer')->dropDownList($arBuyer) ?>

    <?php  echo $form->field($model, 'latitude') ?>

    <?php  echo $form->field($model, 'longitude') ?>

    <?php  echo $form->field($model, 'level') ?>

    <?php  echo $form->field($model, 'flour') ?>

    <?php  echo $form->field($model, 'description') ?>

    <?php  echo $form->field($model, 'metro')->dropDownList($arMetro) ?>

    <?php  echo $form->field($model, 'jk')->dropDownList($arJK) ?>

    <div class="form-group">
        <?= Html::submitButton('Искать', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
