<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


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
                  <?= $form->field($model,'submenu_name') -> textInput(['maxlength'=>"True"]) ?>

    </div>
    <div class="col-md-3">
                  <?= $form->field($model,'picture_path') -> textInput() ?>

    </div>
    <div class="col-md-7">
                  <?= $form->field($model,'text_field') -> textInput(['maxlength'=>"True"]) ?>

    </div>
  </div>
</div>
    <code><?= __FILE__ ?></code>
</div>
<?php ActiveForm::end() ?>
