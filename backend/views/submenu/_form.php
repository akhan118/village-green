<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'submenu_id')->textInput() ?>

    <?= $form->field($model, 'submenu_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
