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
        <div class="col-md-7">

          <?= $form->field($model,'menu_name') -> textInput(['maxlength'=>"True"]) ?>
               <br>

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
     <?= $form->field($model,'menu_order')->dropdownList([
       1 => 'Position 1',
       2 => 'Position 2',
       3 => 'Position 3',
       4 => 'Position 4',
       5 => 'Position 5',
       6 => 'Position 6',
       7 => 'Position 7',
       8 => 'Position 8',
       9 => 'Position 9'
      ],
      ['prompt' => "Select Menu Order"]
      ); ?>
<br>
<br>


                <div class="form-group">
                    <?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>
                </div>



</div>
</div>



<?php ActiveForm::end() ?>
    <code><?= __FILE__ ?></code>
</div>
