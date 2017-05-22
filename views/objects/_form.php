<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Objects */
/* @var $form yii\widgets\ActiveForm */

$arType = array();
$arAgent = array();
$arState = array();
$arStatus = array();
$arJK = array();
$arBuyer = array();
$arOwner = array();

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
foreach ($arMetroDB as $metro){
    $arMetro[$metro['id']] = $metro['name'];
}
sort($arMetro);
$arBuyerDB = \app\models\Buyer::getList();
$arBuyer[0]='';
foreach ($arBuyerDB as $buyer){
    $arBuyer[$buyer['id']] = $buyer['name'];
}

$arParking = array('0'=>'Нет','1'=>"да");
?>

<div class="objects-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'type')->dropDownList($arType) ?>

    <?= $form->field($model, 'owner')->dropDownList($arOwner) ?>

    <?= $form->field($model, 'agent')->dropDownList($arAgent)?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'state')->dropDownList($arState)  ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'image')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList($arStatus) ?>

    <?= $form->field($model, 'built')->textInput() ?>

    <?= $form->field($model, 'rooms_count')->textInput() ?>

    <?= $form->field($model, 'bedrooms')->textInput() ?>

    <?= $form->field($model, 'parking')->dropDownList($arParking) ?>

    <?= $form->field($model, 'buyer')->dropDownList($arBuyer) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'flour')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metro')->dropDownList($arMetro) ?>

    <?= $form->field($model, 'jk')->dropDownList($arJK) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
