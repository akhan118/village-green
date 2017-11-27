<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use yii\bootstrap\Modal;

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>


<?php $form = ActiveForm::begin(); ?>

<div class="container"
    <div class="row" >
        <div class="col-md-7">

        <?= $form->field($model,'page_id') -> textInput(['maxlength'=>"True"]) ?>
        <?= $form->field($model, 'page_html')->widget(CKEditor::className(), [
                       'options' => ['rows' => 2],
                       'preset' => 'advance'
                   ]) ?>
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
