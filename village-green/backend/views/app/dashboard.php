<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
  <div class="col-md-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Dashboard <small>Play Ground</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <a class="btn btn-primary" href="<? echo Url::to('@web/template/production');?>"  target="_blank" role="button">Template</a>


        <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
          <div class="col-md-7" style="overflow:hidden;">
            <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                          <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                      </span>
          </div>

          <div class="col-md-5">
            <!-- <div class="row" style="text-align: center;">
              <div class="col-md-4">
                <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                <h4 style="margin:0">Bounce Rates</h4>
              </div>
              <div class="col-md-4">
                <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                <h4 style="margin:0">New Traffic</h4>
              </div>
              <div class="col-md-4">
                <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                <h4 style="margin:0">Device Share</h4>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
