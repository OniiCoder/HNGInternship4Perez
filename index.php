<!DOCTYPE html>
<html>
<head>
	<title>HNGInternship 4</title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
	body{
		color: #fff;
		font-family: 'Lato', sans-serif;
		background: linear-gradient(to bottom right, #00AEFF, #012738);
	}
		#wrapper {
		  text-align: center;
		  position: absolute; top: 0; left: 0; height: 100%; width: 100%;
		  background: linear-gradient(to bottom right, #00AEFF, #012738);
		}
		#yourdiv {
		  display: inline-block;
		}
		.margin{
			height: 200px;
		}
		a{
			 color: #C4C4C4;
		}
	</style>
</head>
<body>
<div id="wrapper">    
    <div id="yourdiv">
    	<div class="margin"></div>
    	<xmp style="font-family: 'Lato', sans-serif; font-weight: 600; font-size: 30px;"> </peterperez> </xmp>

    	<span style="color: #C4C4C4;">Laravel • PHP • HTML • CSS • JAVA • C</span><br>

    	<span>I believe the passion to learn more everyday,<br> helps me use technology to solve problems around me.</span>
    	<br>
    	<div style="font-size: 25px; margin-top: 10px;">
    	<a href="#"><i class="fa fa-github"></i></a>
    	<a href="#"><i class="fa fa-facebook-square"></i></a>
    	<a href="#"><i class="fa fa-twitter"></i></a>
    	</div>
    	<div style="color: #C4C4C4; font-size: 30px; margin-top: 40px;">
		
		<?php
			date_default_timezone_set("Africa/Lagos");
		?>

		
		<?php
			echo "Today is " . date("Y-m-d");
			?> | 
		<?php 
			date("h:i:sa"); 
		?>
	</div>
    	


    </div>
</div>
</body>
</html>
