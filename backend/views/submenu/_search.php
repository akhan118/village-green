<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SubMenuSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="submenus-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'submenu_id') ?>

    <?= $form->field($model, 'submenu_name') ?>

    <?= $form->field($model, 'menu_id') ?>

  

    <?php // echo $form->field($model, 'text_field') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
