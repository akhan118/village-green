<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

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

        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    // NavBar::begin([
    //     'brandLabel' => 'Village Green Hardware  313*222*2214',
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar-inverse navbar-fixed-top',
    //     ],
    // ]);
    // $menuItems = [
    //     ['label' => 'Home', 'url' => ['/site/index']],
    //     ['label' => 'About', 'url' => ['/site/about']],
    //     ['label' => 'Contact', 'url' => ['/site/contact']],
    //     ['label' => 'Admin', 'url' => ['/site/admin']]
    // ];
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    // } else {
    //     $menuItems[] = '<li>'
    //         . Html::beginForm(['/site/logout'], 'post')
    //         . Html::submitButton(
    //             'Logout (' . Yii::$app->user->identity->username . ')',
    //             ['class' => 'btn btn-link logout']
    //         )
    //         . Html::endForm()
    //         . '</li>';
    // }
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => $menuItems,
    // ]);
    // NavBar::end();
    ?>


        <header>
            <!-- header-area start -->
            <div class="header-area default-header hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                                    <img src="img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <!-- Search Button start -->
                            <a href="#" class="search-btn" title="Quick view" data-toggle="modal" data-target="#searchModal">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <img class="search-logo" src="img/logo/logo.png" alt="search-logo">
                                    <form action="#" class="form-inline">
                                        <input type="text" name="search" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                    <div class="quick_search">
                                        <h5 class="search-head">Quick search</h5>
                                        <ul>
                                            <li><a href="#">website</a></li>
                                            <li><a href="#">photoshop</a></li>
                                            <li><a href="#">social marketing</a></li>
                                            <li><a href="#">business</a></li>
                                            <li><a href="#">agency</a></li>
                                            <li><a href="#">portfolio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Search Button end -->
                            <!-- mainmenu start -->
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
                                            <li><a class="pagess" href="index.html">Home</a>
                                                <ul class="sub-menu sub-1">
                                                    <li><a href="index.html">Home 01</a></li>
                                                    <li><a href="index-2.html">Home 02</a></li>
                                                    <li><a href="index-3.html">Home 03</a></li>
                                                    <li><a href="index-4.html">Home 04</a></li>
                                                    <li><a href="index-5.html">Home 05</a></li>
                                                    <li><a href="index-6.html">Home 06</a></li>
                                                    <li><a href="index-7.html">Home 07</a></li>
                                                    <li><a href="index-8.html">Home 08</a></li>
                                                    <li><a href="index-9.html">Home 09</a></li>
                                                    <li><a href="index-10.html">Home 10</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a class="pagess" href="services.html">Services</a>
                                                <ul class="sub-menu sub-1">
                                                    <li><a href="sub-services-1.html">Business Managment</a></li>
                                                    <li><a href="sub-services-2.html">Business Planning</a></li>
                                                    <li><a href="sub-services-3.html">Online Support</a></li>
                                                    <li><a href="sub-services-4.html">Online Marketing</a></li>
                                                    <li><a href="sub-services-5.html">Financial Support</a></li>
                                                    <li><a href="sub-services-6.html">Succesful Business</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="portfolio.html">Portfolio</a>
                                                <ul class="sub-menu sub-1">
                                                    <li><a href="portfolio-1.html">Portfolio 2 column</a></li>
                                                    <li><a href="portfolio-2.html">Portfolio 3 column</a></li>
                                                    <li><a href="portfolio-3.html">Portfolio 4 column</a></li>
                                                    <li><a href="portfolio-4.html">Portfolio fullwidth </a></li>
                                                    <li><a href="project-1.html"> Single project one</a></li>
                                                    <li><a href="project-2.html"> Single project two</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="pagess" href="blog-grid.html">Blog</a>
                                                <ul class="sub-menu sub-1">
                                                    <li><a href="blog-grid.html">Blog grid</a></li>
                                                    <li><a href="blog-grid-2.html">Blog 3 column</a></li>
                                                    <li><a href="blog-single.html">Blog Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- mainmenu end -->
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index.html"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home 01</a></li>
                                                <li><a href="index-2.html">Home 02</a></li>
                                                <li><a href="index-3.html">Home 03</a></li>
                                                <li><a href="index-4.html">Home 04</a></li>
                                                <li><a href="index-5.html">Home 05</a></li>
                                                <li><a href="index-6.html">Home 06</a></li>
                                                <li><a href="index-7.html">Home 07</a></li>
                                                <li><a href="index-8.html">Home 08</a></li>
                                                <li><a href="index-9.html">Home 09</a></li>
                                                <li><a href="index-10.html">Home 10</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="services.html">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="sub-services-1.html">Business Managment</a></li>
                                                <li><a href="sub-services-2.html">Business Planning</a></li>
                                                <li><a href="sub-services-3.html">Online Support</a></li>
                                                <li><a href="sub-services-4.html">Online Marketing</a></li>
                                                <li><a href="sub-services-5.html">Financial Support</a></li>
                                                <li><a href="sub-services-6.html">Succesful Business</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="portfolio.html">Portfolio</a>
                                            <ul class="sub-menu">
                                                <li><a href="portfolio-1.html">Portfolio 2 column</a></li>
                                                <li><a href="portfolio-2.html">Portfolio 3 column</a></li>
                                                <li><a href="portfolio-3.html">Portfolio 4 column</a></li>
                                                <li><a href="portfolio-4.html">Portfolio fullwidth </a></li>
                                                <li><a href="project-1.html"> Single project one</a></li>
                                                <li><a href="project-2.html"> Single project two</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog-grid.html">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-grid.html">Blog grid</a></li>
                                                <li><a href="blog-grid-2.html">Blog 3 column</a></li>
                                                <li><a href="blog-single.html">Blog Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contacts</a></li>
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
        <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="footer-top">
                      <div class="footer-social text-right">
                          <ul>
                              <li><a href="#">Facebook</a></li>
                              <li><a href="#">Twitter</a></li>
                              <li><a href="#">Youtube</a></li>
                              <li><a href="#">Instragram</a></li>
                          </ul>
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

</body>
</html>
<?php $this->endPage() ?>
