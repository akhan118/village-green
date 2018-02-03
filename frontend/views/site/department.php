<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

// $this->title = 'department';
// $this->params['breadcrumbs'][] = $this->title;

?>


<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- service area start -->
    	<!-- Start Slider Area -->
        <div class="">
            <div class="container">
                <div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="single-page">
													<div class="page-img elec-page">
															<img src="img/services/headerphoto2.jpg" alt="">
													</div>
											</div>
									</div>
                </div>
            </div>
        </div>
        <!-- End services Area -->
        <div class="page-head area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-5 col-xs-12">
                        <div class="page-head-left">

                            <div class="single-page-head">
                              <p>&nbsp;</p>
                                <div class="left-contact">
                                    <h4 class="sec-head">Contact Information</h4>
                                    <div class="left-cont-info">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-map-marker"></i>76, Building- Avenue-16, London</a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i>info@royalsteel.com</a></li>
                                            <li><a href="#"><i class="fa fa-phone"></i> + (1800) - 354 - 586</a></li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start service page -->
                    <div class="col-md-9 col-sm-7 col-xs-12">
                        <div class="row">

                          <? if ( isset($results[0]) ){
                           echo ($results[0]["page_html"]); }
                           else { ?>


                             <div class="col-md-6 col-sm-12 col-xs-12">
                                 <div class="single-well">
                                     <a href="#">
                                         <img src="img/services/ser2.jpg" alt="">
                                         <h4 class="sec-head">Perfect Planning</h4>
                                     </a>
                                     <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                                     <a class="page-btn" href="#"> Read more</a>
                                 </div>
                             </div>
                             <!-- End single page -->
                             <!-- strat single page -->
                             <div class="col-md-6 col-sm-12 col-xs-12">
                                 <div class="single-well">
                                     <a href="#">
                                         <img src="img/services/ser4.jpg" alt="">
                                         <h4 class="sec-head">Perfect Finshing</h4>
                                     </a>
                                     <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                                     <a class="page-btn" href="#"> Read more</a>
                                 </div>
                             </div>
 														<div class="col-md-6 col-sm-12 col-xs-12">
 																<div class="single-well">
 																		<a href="#">
 																				<img src="img/services/ser4.jpg" alt="">
 																				<h4 class="sec-head">Perfect Finshing</h4>
 																		</a>
 																		<p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
 																		<a class="page-btn" href="#"> Read more</a>
 																</div>
 														</div>
 														<div class="col-md-6 col-sm-12 col-xs-12">
 																<div class="single-well">
 																		<a href="#">
 																				<img src="img/services/ser4.jpg" alt="">
 																				<h4 class="sec-head">Perfect Finshing</h4>
 																		</a>
 																		<p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
 																		<a class="page-btn" href="#"> Read more</a>
 																</div>
 														</div>

                           <? }  ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- End page Area -->
		<!-- Start Footer bottom Area -->
		<div class="footer-area">
		   <div class="container">
			   <div class="row">
				  <div class="col-md-12 col-sm-12">
                           <div class="footer-bottom">
                            <div class="copyright text-center">
                                <p>Copyright © 2016 <a href="#"> usdtheme</a>. All Rights Reserved</p>
                            </div>
                        </div>
				   </div>
			   </div>
		   </div>
		</div>


</div>
