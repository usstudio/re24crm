<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Buyer */
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
?>

<div class="buyer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'phone')->textInput(['id'=>'phone']) ?>
    <?= $form->field($model, 'price_from')->textInput() ?>
    <?= $form->field($model, 'price_to')->textInput() ?>
    <?= $form->field($model, 'type_object')->dropDownList($arType) ?>
    <?= $form->field($model, 'agent')->dropDownList($arAgent) ?>
    <?= $form->field($model, 'comment')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
