<!DOCTYPE html>
<!--

 * Author Jitendra Meena
 * License: http://graphberry.com/pages/license
-->
<html lang="en">

    <head>
	
	<style>
.example1 {
 height: 50px;	
 overflow: hidden;
 position: relative;
}
.example1 h3 {
 font-size: 3em;
 color: red;
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: center;
 /* Starting position */
 -moz-transform:translateX(100%);
 -webkit-transform:translateX(100%);	
 transform:translateX(100%);
 /* Apply animation to this element */	
 -moz-animation: example1 15s linear infinite;
 -webkit-animation: example1 15s linear infinite;
 animation: example1 15s linear infinite;
}
/* Move it (define the animation) */
@-moz-keyframes example1 {
 0%   { -moz-transform: translateX(100%); }
 100% { -moz-transform: translateX(-100%); }
}
@-webkit-keyframes example1 {
 0%   { -webkit-transform: translateX(100%); }
 100% { -webkit-transform: translateX(-100%); }
}
@keyframes example1 {
 0%   { 
 -moz-transform: translateX(100%); /* Firefox bug fix */
 -webkit-transform: translateX(100%); /* Firefox bug fix */
 transform: translateX(100%); 		
 }
 100% { 
 -moz-transform: translateX(-100%); /* Firefox bug fix */
 -webkit-transform: translateX(-100%); /* Firefox bug fix */
 transform: translateX(-100%); 
 }
}
</style>
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107445981-1"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-107445981-1');
      </script>
	

      <script>

     /* $(document).ready(function() {

var id = '#dialog';

//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();

//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);
$('#mask').fadeTo("slow",0.9);

//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();


//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);


//transition effect
$(id).fadeIn(2000);

//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});

});

$(window).load(function(){
  $('#myModal').modal('show');
}); */
 $(window).load(function(){        
   $('#myModal').modal('show');
    }); 

</script>

      <!-- Global Site Tag (gtag.js) - Google Analytics -->

        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to RCAOnline</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type='text/css'>
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

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


   <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/sd/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/sd/style.css" rel="stylesheet" type="text/css"/> 
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/> 
		
		<!-- Rapid CSS Files -->
		 <!-- Libraries CSS Files -->
  <link href="rapid/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="rapid/lib/animate/animate.min.css" rel="stylesheet">  
  <link href="rapid/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
   <link href="rapid/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> 
 <link href="rapid/lib/lightbox/css/lightbox.min.css" rel="stylesheet"> 

 <style>
 p.wfooter {
 padding: 10px;
    font-weight: 100;
    color: #fff;
}
</style>

    </head>

    <body >
      <!-- header setction starts here -->

      <?php
      include_once("header.php");
      ?>
      <!-- header section ends here -->
	  
	  
	   
	
	  

  <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm" >
			  <div >
<h3 style="color:red;">Reckon Videos Are Now Available on Android </h3>
</div>
</br>
            <div class="g-text-center--xs g-margin-b-40--xs">
                <h1 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Reckon Civil Academy</h1>
               
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md" >
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <!--<i class="g-font-size-28--xs g-color--primary ti-desktop"></i> -->
								<i class="material-icons" style="font-size:48px;color:red">school</i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
						<a href="courses.php">
						 <p class="g-margin-b-0--xs" style="color:#656565;"><b>I Want to Join</b></p>
                            <h3 class="g-font-size-18--xs"><b>Reckon Courses</b></h3>
                           </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md" >
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                               <!-- <i class="g-font-size-28--xs g-color--primary ti-settings"></i> -->
								<i class="material-icons" style="font-size:48px;color:purple">work</i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
						<a href="https://www.youtube.com/playlist?list=PLJyvawuT3T-T8TKNxwl5lx0Q6i5NdGbgq" target="_blank">
						 <p class="g-margin-b-0--xs" style="color:#656565;" ><b>I Want to Know About</b> </p>
                            <h3 class="g-font-size-18--xs"><b>New Job Openings</b></h3>
                           </a>
                        </div>
                    </div>
                </div>
               <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md" >
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                               <!-- <i class="g-font-size-28--xs g-color--primary ti-ruler-alt-2"></i> -->
								<i class="fa fa-play-circle-o" style="font-size:48px;color:red"></i>
								
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
						<a href="https://www.youtube.com/playlist?list=PLJyvawuT3T-SU0qRQOdgc58qcPfvKxm1z" target="_blank">
						 <p class="g-margin-b-0--xs" style="color:#656565;"><b>Show me</b></p>
                            <h3 class="g-font-size-18--xs"><b>Demo Videos</b></h3>
                           
							</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
            <div class="row">
               <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md" >
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <!--<i class="g-font-size-28--xs g-color--primary ti-package"></i>-->
								<i class='fas fa-trophy' style='font-size:48px;color:purple'></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
						<a href="results.php">
						  <p class="g-margin-b-0--xs" style="color:#656565;"><b>I want to Check</b></p> 
                            <h3 class="g-font-size-18--xs"><b>Reckon Results</b></h3>
							</a>
                          
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md" >
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <!--<i class="g-font-size-28--xs g-color--primary ti-star"></i> -->
								<i class='fas fa-book-reader' style='font-size:48px;color:red'></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
						<a href="examprep.php" >
						 <p class="g-margin-b-0--xs" style="color:#656565;"><b>I Want to Know various </b></p>
                            <h3 class="g-font-size-18--xs"><b>Exam Details</b></h3>
                           </a>
                        </div>
                    </div>
                </div>
              <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md" >
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <!--<i class="g-font-size-28--xs g-color--primary ti-panel"></i>-->
								<i class="material-icons" style="font-size:48px;color:purple">sentiment_very_satisfied</i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
						<a href="javascript:void(0)" data-fid="0x3a293d20b7050417:0xa75644c909b9bb0e" data-is_owner="false" data-reply_source="merchant-replies-lu" data-sort_by="qualityScore" data-async-trigger="reviewDialog" jsaction="r.BMsjWllwe1s" data-rtid="inN2IWeEjHcM" jsl="$x 2;" data-ved="2ahUKEwjXvuzUyYvhAhWS2KQKHUAeAcEQ8mswEXoECAYQIQ">
						 <p class="g-margin-b-0--xs" style="color:#656565;"><b>I want to see Reckon's </b></p>
                            <h3 class="g-font-size-18--xs"><b>Student's Reviews</b></h3>
							</a>
                           </div>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
			
			
        </div>
        <!-- End Features -->
		 <!-- Offer Add Div starts here -->
        
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><b>Latest Offer</b></h4>
      </div>
      <div class="modal-body">
       <img src="images/offer.png" alt="RCA Online"  >
      </div>
      <div class="modal-header">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      <!-- Offer Add Div Ends Here -->
		
	
        <!-- Newsletter section end -->
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
        <script type="text/javascript" src="js/drop.js"></script>
		
		<!--Free Lance template starting-->
		  <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
		<!-- Free Lance template ending -->
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>