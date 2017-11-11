<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<p>Looking Good  The button takes you to this new page </p>

<p>Please fill out the following fields to create a product:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['action' =>['products/saveproduct'],'menu_id' => 'product-form']); ?>

                <?= $form->field($model, 'menu_name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'productcategories_CategoryID')->dropDownList(
            ArrayHelper::map(Productcategories::find()->asArray()->all(), 'CategoryID', 'CategoryName'),
            ['prompt'=>'Select A Category']
          ); ?>


                <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'product-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
