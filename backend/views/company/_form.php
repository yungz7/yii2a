<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Company */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="company-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_address')->textInput(['maxlength' => true]) ?>

    <!--?= $form->field($model, 'company_created_date')->textInput() ?-->

    <?= $form->field($model, 'company_status')->dropDownList([ 'ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE', ], ['prompt' => 'Status']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
