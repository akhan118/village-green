<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
<?=$form->field($model,'menu_name') ?>
<?=$form->field($model,'menu_order') ?>
<?=Html::submitButton ("Submit",['class'=>'btn btn-success'])?>
<?php ActiveForm::end(); ?>
