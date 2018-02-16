<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <link rel="shortcut icon" href="img/logo/favicon.ico">

        <!-- all css here -->

        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl-carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- venobox css -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
                <link href="css/carousel/style.css" rel="stylesheet" type="text/css" />
            <link href="css/camera.css" rel="stylesheet" type="text/css" />

        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

        <header>
            <!-- header-area start -->
            <div class="header-area default-header hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href= <?php echo Url::to(['site/index']) ?>>
                                    <img src="img/logo/SunLogo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                         
                            <nav class="navbar navbar-default">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="menu-toggle">
                                    <button class="menu-btn">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">

                                          <?
                                           // var_dump($this->params['menu']);
                                          //echo  count($this->params['menu']);
                                          if (isset($this->params['menu'])) {  ?>
                                            <li><a href=<?php echo Url::to(['site/index']) ?>>Home</a></li> 
                                            <?
                                            for($i=0; $i < count($this->params['menu']); $i++)
                                            {
                                            ?>

                                            <li><a class="pagess" href=<? echo Url::to(['site/page/', 'menu_id' => $this->params['menu'][$i]['menu_id']]); ?>> <? if(isset($this->params['menu'])){echo $this->params['menu'][$i]['menu_name'];}?></a>
                                              <ul class="sub-menu sub-1">

                                                <?
                                                for($k=0; $k < count($this->params['menu'][$i]['submenus']); $k++)
                                                {
                                                  echo '<li><a href='.Url::to(['site/page/', 'menu_id' => $this->params['menu'][$i]['menu_id'], 'submenu_id' => $this->params['menu'][$i]['submenus'][$k]['submenu_id']]).'>'.$this->params['menu'][$i]['submenus'][$k]['submenu_name'].'</a></li>';
                                                }
                                                ?>
                                                  <!-- <li><a href="sub-services-1.html">Electrical</a></li> -->
                                                  <!-- <li><a href="sub-services-2.html">Plumbing</a></li>
                                                  <li><a href="sub-services-3.html">Paint</a></li> -->
                                              </ul>
                                            </li>

                                            <?
                                              }
                                            }
                                             ?>
                                        </ul>
                                      <div class="social text-right">
                                        <ul>
                                          <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
                                        </ul>
                                      </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- mainmenu end -->
                </div>
            </div>

            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/SunLogo3.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>

                                      <?  if (isset($this->params['menu'])) {
                                        //a place holder for home but removed
                                        ?>
                                        <?
                                        for($i=0; $i < count($this->params['menu']); $i++)
                                        {
                                          ?>

                                          <li><a href=<? echo Url::to(['site/page/', 'menu_id' => $this->params['menu'][$i]['menu_id']]); ?>> <? if(isset($this->params['menu'])){echo $this->params['menu'][$i]['menu_name'];}?></a>
                                            <ul class="sub-menu">

                                              <?
                                              for($k=0; $k < count($this->params['menu'][$i]['submenus']); $k++)
                                              {
                                                echo '<li><a href='.Url::to(['site/page/', 'menu_id' => $this->params['menu'][$i]['menu_id'], 'submenu_id' => $this->params['menu'][$i]['submenus'][$k]['submenu_id']]).'>'.$this->params['menu'][$i]['submenus'][$k]['submenu_name'].'</a></li>';
                                              }
                                              ?>

                                            </ul>
                                          </li>
                                          <?
                                        }
                                      }
                                      ?>

                                    </ul>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->
        </header>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Coding Crash Course </p>
        <p class="pull-right"></p>
    </div>
</footer> -->


<div class="footer-area footer-second">
   <div class="container">
     <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6">
                   <div class="footer-bottom">
                       <div class="copyright text-center">
                           <p>Copyright © 2016 <a href="#"> usdtheme</a>. All Rights Reserved</p>
                       </div>
                   </div>
               </div>

     </div>
   </div>
</div>


<?php $this->endBody() ?>


<!-- all js here -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl-carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- isotope js -->
<script src="js/isotope.pkgd.min.js"></script>
<!-- Meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- venobox js -->
<script src="js/venobox.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- main js -->
<script src="js/main.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a1b551434afd75f"></script>

<script src="js/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="js/camera/scripts/camera.min.js" type="text/javascript"></script>
                <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
                <script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '35%', pagination: true });}$(function(){startCamera()});</script>
</body>
</html>
<?php $this->endPage() ?>
