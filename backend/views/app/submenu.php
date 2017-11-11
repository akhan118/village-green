<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\menu;
use backend\models\submenu;


$this->title = 'SubMenu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-submenu">
    <h1><?= Html::encode($this->title) ?></h1>


  </div>
  <?php $form = ActiveForm::begin(); ?>
  <div class="container"
      <div class="row" >


		<div class="col-md-3">

		<?= $form->field($model,'menu_name')->dropdownList(
			 ArrayHelper::map(menu::find()->all(),'menu_id', 'menu_name'),

		['prompt' => 'Select Menu Name']); ?>

    <br>
    <br>
    <?=$form->field($model,'submenu_name') -> textInput(['maxlength'=>"True"]); ?>


    <?=$form->field($model,'visible_or_invisible') ->radiolist ([
      1=>"Yes",
      2=>"No"
    ]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'save-button']) ?>
    </div>
   </div>
<br>
<br>
<div class="col-md-7">



  <?=  $form->field($model,'submenu_name') -> textInput(['maxlength'=>"True"]); ?>

  <?=  $form->field($model,'visible_or_invisible') ->radiolist ([
     1=>"Yes",
     2=>"No"
   ]);?>



</div>
<br>
<br>


  </div>
</div>
    <code><?= __FILE__ ?></code>
</div>
<?php ActiveForm::end() ?>
