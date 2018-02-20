<?php

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\bootstrap\ActiveForm;



$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-menu">

    <h1><?= Html::encode($this->title) ?></h1>



 </div>
<br>
<br>

<?php $form = ActiveForm::begin(); ?>
<div class="container"
    <div class="row" >

        <!--Selection BAR -->
        <div class="col-md-5">
              <? if (isset($message)) {echo $message;} ?>
          <?= $form->field($model,'menu_name') -> textInput(['maxlength'=>"True"]) ?>
               <br>

                    <br>


               <?= $form->field($model,'menu_submenu_true') ->radiolist ([
                  1=>"Yes",
                  2=>"No"
                ]);?>
<br>
<br>



              <br>
              <br>

<br>
<br>


                <div class="form-group">
               <?= Html::submitButton('Add', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>


                    </div>

                </div>



</div>
</div>



<?php ActiveForm::end() ?>
    <!-- <code><?= __FILE__ ?></code> -->
</div>
