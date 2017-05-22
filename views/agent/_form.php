<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Agent */
/* @var $form yii\widgets\ActiveForm */

$arType = array();
$arAgent = array();
$arState = array();
$arStatus = array();
$arJK = array();
$arBuyer = array();
$arAgentPosition = array();

$arAgentPositionDB = \app\models\AgentPosition::getList();
foreach ($arAgentPositionDB as $position){
    $arAgentPosition[$position['id']] = $position['name'];
}
$arTypeDB = \app\models\ObjectsType::getList();
foreach ($arTypeDB as $type) {
    $arType[$type['id']] = $type['name'];
}
?>

<div class="agent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'position')->dropDownList($arAgentPosition) ?>

    <?= $form->field($model, 'type_object')->dropDownList($arType) ?>

    <?= $form->field($model, 'phone')->textInput(['id'=>'phone']) ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <?= $form->field($model, 'birthday')->textInput(['id'=>'date']) ?>

    <?= $form->field($model, 'logo_path')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
