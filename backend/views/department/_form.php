<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Company;

/* @var $this yii\web\View */
/* @var $model backend\models\Department */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="department-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'company_id')->textInput() ?-->

    <?= $form->field($model, 'company_id') ->dropDownList(
    	ArrayHelper::map(company::find()->all(),'company_id','company_name'),
    	['prompt'=>'Select Company']
    ) ?>

    <?= $form->field($model, 'department_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
