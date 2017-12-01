<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Submenus */

$this->title = 'Update Submenus: ' . $model->submenu_id;
$this->params['breadcrumbs'][] = ['label' => 'Submenuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->submenu_id, 'url' => ['view', 'id' => $model->submenu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="submenus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
