<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SubMenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Edit Submenus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- <p> -->
        <!-- <?= Html::a('Create Submenus', ['create'], ['class' => 'btn btn-success']) ?> -->
    <!-- </p> -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,     // SThis puts the row for searching
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'submenu_id',
            'submenu_name',
            'menu_id',
            // 'visible_or_invisible',
            // 'picture_path',
            // 'text_field',
      //      ['class' => yii\grid\ActionColumn::className(),'template'=>'{view} {update}'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
