<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenus */
/* @var $form ActiveForm */
?>
<div class="site-submenu">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'submenu_name') ?>
        <?= $form->field($model, 'menu_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-submenu -->
