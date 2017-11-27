<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UploadEntry */
/* @var $form yii\widgets\ActiveForm */
?>
    <?php $form = ActiveForm::begin(); ?>

<div class="photos-form">


    <?= $form->field($model, 'company_id')->textInput() ?>

    <?= $form->field($model, 'company_name')->textInput() ?>

    <?= $form->field($model, 'company_email')->textInput() ?>

    <?= $form->field($model, 'file' )->fileInput(); ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>