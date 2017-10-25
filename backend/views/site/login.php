<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-menu">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>
    <div class="menu" >

            <!--Selection BAR -->
            <div class="col-md-3">
                <p class="lead">Create Page</p>
                <div class="list-group">
                    <a class="list-group-item">Menus</a>
                    <a class="list-group-item">Pages</a>
                    <a class="list-group-item">Pictures</a>
                </div>
           </div>
         </div>


</div>
