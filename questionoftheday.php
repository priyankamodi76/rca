<!DOCTYPE html>
<!--
 
 * Author Jitendra Meena
 * License: http://graphberry.com/pages/license
-->
<html lang="en">

    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Question of The Day</title>
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
      <!-- header setction starts here -->

      <?php
      include("header.php");
	 include 'connection.php';
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
                      <h2>Today's Question of Day
</h3>
                    <!--  <div class="about-text centered">-->
              <?php
			  $today_date = date('d-m-Y ');
			  echo $today_date."</br>";
			  $sql = "SELECT * FROM qod WHERE qod_date='".$today_date."'";
						$result = mysql_query($sql, $con) or die(mysql_error());
						$i = 1;
						while($row = mysql_fetch_array($result)) {
						if($row['qod_type']==0) {
							echo "<table align=\"center\" width=\"500\" border=\"1\">";
							echo "<tr><td align=\"left\" colspan=\"2\">Question</td><td align=\"center\" >".$row['qod_desc']."</td></tr>";
							echo "<tr><td align=\"left\" rowspan=\"4\">Options</td><td align=\"center\">A</td><td align=\"center\">".$row['qod_option1']."</td></tr>";
							echo "<tr><td align=\"center\">B</td><td align=\"center\">".$row['qod_option2']."</td></tr>";
							echo "<tr><td align=\"center\">C</td><td align=\"center\">".$row['qod_option3']."</td></tr>";
							echo "<tr><td align=\"center\">D</td><td align=\"center\">".$row['qod_option4']."</td></tr>";
							echo "</table>";							
						} else if($row['qod_type']==1) {
						echo "<table align=\"center\" width=\"300\" border=\"1\">";
							echo "<tr><td align=\"left\" colspan=\"2\">Question</td><td align=\"left\" >".$row['qod_desc']."</td></tr>";
							
							echo "</table>";
						}
						}
			  ?>
			  
                   
				   <h1 align="center"> For detailed solution of the question </h1>
					<h2 align="center"> Send your answer on email/whatsapp </h2>
					<h3 align="center">whatsapp :  9993523128</h3>
					<h3 align="center">Email Us :  rcaonline.in@gmail.com</h3>
					</div>
					
					
					
					
                  </div>

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
        <!--<script type="text/javascript" src="js/examGallery.js"></script> -->
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
