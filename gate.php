<!DOCTYPE html>
<!--
 
 * Author Jitendra Meena
 * License: http://graphberry.com/pages/license
-->
<html lang="en">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gate Analysis</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <link rel="stylesheet" type="text/css" href="css/examGallery.css" />
		    <link rel="stylesheet" type="text/css" href="css/dropdownmenu.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico1/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico1/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico1/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico1/favicon.ico">


    </head>

    <body >

        <?php
      include_once("header.php");
      ?>

      <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
      <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <!-- header section ends here -->
        <!-- Start home section -->



<!-- Gate graphs section starts here -->
<div class="section primary-section">
<div class="triangle"></div>
            <!-- mask elemet use for masking background image -->
            <div class="mask"></div>
    <div class="container" >
	<div class="title">
                        <h1>Preparing for Gate</h1>
                        <p>Check out our analysis for the Gate Exam.</p>
                    </div>
        <div id="main_area" >
            <!-- Slider -->
            <div class="row ">
                <div class="col-sm-6" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-0" style="background-color:#93B874; height:60px; width:120px; color:#ffffff; line-height: 1.8; border-radius: 10px;"><b style="vertical-align:middle">Environmental Engineering</b></a>
                        </li>

                        <li class="col-sm-3">
                          <!--  <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/150x150&text=1"></a> -->
                          <a class="thumbnail" id="carousel-selector-1" style="background-color:#3b75d3;  height:60px; width:120px; color:#ffffff; line-height: 1.8;border-radius: 10px;"><b>Geotech Engineering</b></a>
                        </li>

                        <li class="col-sm-3">

                            <a class="thumbnail" id="carousel-selector-2" style="background-color:#246c6d; height:60px; width:120px; color:#ffffff; line-height: 1.8;border-radius: 10px;"><b>Highway Engineering</b></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-3" style="background-color:#246d3a;  height:60px; width:120px; color:#ffffff; line-height: 3.2;border-radius: 10px;"><b>Hydrology</b></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-4" style="background-color:#7e9184;  height:60px; width:120px; color:#ffffff; line-height: 3.2;border-radius: 10px;"><b>Irrigation</b></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-5" style="background-color:#91827e; height:60px; width:120px; color:#ffffff; line-height: 3.2;border-radius: 10px;"><b>Mathematics</b></a>
                        </li>
                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-6" style="background-color:#b7583e;  height:60px; width:120px; color:#ffffff; line-height: 1.8;border-radius: 10px;"><b>RCC </br>Structures</b></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-7" style="background-color:#7c1e04; height:60px; width:120px; color:#ffffff; line-height: 1.8;border-radius: 10px;"><b>Steel Structures</b></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-8" style="background-color:#af9f9a;  height:60px; width:120px; color:#ffffff; line-height: 1.8;border-radius: 10px;"><b>Strength Of Material</b></a>
                        </li>

                        <li class="col-sm-3">
                            <a class="thumbnail" id="carousel-selector-9" style="background-color:#968e3a;  height:60px; width:120px; color:#ffffff; line-height: 1.8;border-radius: 10px;"><b>Structural Analysis</b></a>
                        </li>
                        <li class="col-sm-3" >
                            <a class="thumbnail" id="carousel-selector-10" style="background-color:#0c588e; height:60px; width:120px; color:#ffffff; line-height: 3.2;border-radius: 10px;vertical-align:middle;"><b>Survey</b></a>
                        </li>


                    </ul>

					<div class="title">
                        <p>Click on a chapter for its analysis graph</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-12" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                            <img src="images/charts/gate/environment.jpg"></div>

                                         <div class="item" data-slide-number="1">
                                            <img src="images/charts/gate/geotech.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                            <img src="images/charts/gate/highway_engineering.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                            <img src="images/charts/gate/hydrology.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                            <img src="images/charts/gate/irrigation.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                            <img src="images/charts/gate/maths.jpg"></div>

                                        <div class="item" data-slide-number="6">
                                            <img src="images/charts/gate/rcc.jpg"></div>

                                        <div class="item" data-slide-number="7">
                                            <img src="images/charts/gate/steel.jpg"></div>

                                        <div class="item" data-slide-number="8">
                                            <img src="images/charts/gate/strength_of_mat.jpg"></div>

                                        <div class="item" data-slide-number="9">
                                            <img src="images/charts/gate/structural_analysis.jpg"></div>

                                        <div class="item" data-slide-number="10">
                                            <img src="images/charts/gate/survey.jpg"></div>


                                    </div>
                                    <!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Slider-->
            </div>

        </div>
    </div>
  </br>
    </br>

    <div class="triangle"></div>
  </div>

<!-- Gate slider section ends here-->



        <!-- End home section -->


        <?php
        include_once("footer1.php");
        ?>
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <script type="text/javascript" src="js/examGallery.js"></script>

        <!-- Load google maps api and call initializeMap function defined in app.js -->
       <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
