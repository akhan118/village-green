<?php
/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is a hardware store that also has DYI items</p>
    <p>There telephone number is 313-222-2222 </p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2947.9429359957026!2d-83.07521458454355!3d42.365055379186536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824d29939ecebdb%3A0x2fb87bef73266577!2s440+Burroughs+St%2C+Detroit%2C+MI+48202!5e0!3m2!1sen!2sus!4v1508284151110" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    <code><?= __FILE__ ?></code>
</div>
