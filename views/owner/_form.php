<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Owner */
/* @var $form yii\widgets\ActiveForm */
$arAgentDB = \app\models\Agent::getList();
foreach ($arAgentDB as $agent){
    $arAgent[$agent['id']] = $agent['name'];
}
$arObjectsDB = \app\models\Objects::getList();
foreach ($arObjectsDB as $object){
    $arObjects[$object['id']] = '['.$object['id'].'] '.$object['address'];
}
?>

<div class="owner-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['id'=>'phone']) ?>

    <?= $form->field($model, 'object')->dropDownList($arObjects) ?>

    <?= $form->field($model, 'agent')->dropDownList($arAgent) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
