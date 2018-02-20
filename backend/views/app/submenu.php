<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Menu;
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

  <?= $form->field($model,'menu_id')->dropdownList(
     ArrayHelper::map(menu::find()->all(),'menu_id', 'menu_name'),

  ['prompt' => 'Select Menu Name']); ?>

  <br>
  <br>
  <?=$form->field($model,'submenu_name') -> textInput(['maxlength'=>"True"]); ?>


  <div class="form-group">
      <?= Html::submitButton('Add', ['class' => 'btn btn-primary', 'name' => 'create-button']) ?>
  </div>
 </div>
<br>
<br>

<br>
<br>


</div>
</div>
  <!-- <code><?= __FILE__ ?></code> -->
</div>
<?php ActiveForm::end() ?>
