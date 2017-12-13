<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>RILO - Your fitness guide</title>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css">
	<?php include("inc/htmlhead.php");?>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
	</script>
	<style>
	#greeting{
	font-size:1.6em;
	padding-top:.3em;
	font-family:Verdana, Geneva, sans-serif;
	font-weight:bold;
	}
	#toollink a{
		margin-top:.5em;
		margin-bottom:.5em;
		padding-top:1em;
		padding-bottom:1em;
		float:right;
	}
	#DYN{
	border:#BF3617 dotted;
	}
	</style>
</head>
<body id="bhome">
<div class="container">
<?php include("inc/header.php");?>
<div class="row">
<!-- Flexslider -->
	<div class="col-md-8 col-sm-12 col-xs-12">
		<div class="flexslider">
		  <ul class="slides">
			<li>
			  <img src="img/slide1.jpg" alt="Image 1"/>
			</li>
			<li>
			  <img src="img/slide2.jpg" alt="Image 2"/>
			</li>
			<li>
			  <img src="img/slide3.jpg" alt="Image 3"/>
			</li>
			 <li>
			  <img src="img/slide4.jpg" alt="Image 4"/>
			</li>
		  </ul>
		</div>
	</div>
<!-- Flexslider end -->
	<div class="col-md-4 hidden-sm hidden-xs">
	<div class="row">
	<!-- Greeting -->
		<div class="col-md-8" id="greeting">
			<p>Hey!<br/>Get some fresh air now.</p>
		</div>
	<!-- Greeting end -->
	<!-- tool -->
		<div class="col-md-4 hidden-sm" id="toollink">
			<a href="tools.php">CAL Calculator</a><hr/>
			<a href="tools.php">BMI Calculator</a>
		</div>
	<!-- tool end -->
	</div>
	<hr class="hidden-sm"/>
	<!-- DYN -->
	<div class="row" id="DYN">
	<div class="col-sm-12">
		<h3>Did you know?</h3>
		<p>The name Maratho comes from the legend of Pheidippides, a Greek messenger. The legend states that he was sent from the battlefield of Marathon to Athens to announce that the Persians had been defeated in the Battle of Marathon (in which he had just fought), which took place in August or September, 490 BC. It is said that he ran the entire distance without stopping and burst into the assembly, exclaiming νενικήκαμεν (nenikekamen, "we have wοn")... <p>
	</div>
	</div>
	<!-- DYN end -->
	</div>
</div>
<div class="row">
<div class="col-sm-10">
<!-- News -->
<section class="row">
	<div class="col-xs-4 col-sm-3">
	<a href="#"><img class="img-responsive" src="img/thumb/img1.jpg" alt="Back Fat Be Gone: The 9 Back Exercises You Need"/></a>
	</div>
	<div class="col-xs-8 col-sm-9">
	<a href="#">
		<h4>Back Fat Be Gone: The 9 Back Exercises You Need</h4>
		<p>Back fat keeping you from feeling sexy in your strapless sundress? While you can't spot reduce (it takes a healthy diet and consistent workout plan to reduce fat, no matter where it is on your body), you can still strengthen and tone your back to take your results to the next level. Master these moves to sculpt a sexy back in no time.</p>
	</a>
	</div>
</section>
<hr/>
<section class="row">
	<div class="col-xs-4 col-sm-3">
	<a href=" "><img class="img-responsive" src="img/thumb/img2.jpg" alt="Cycling Shoes Made Simple"/></a>
	</div>
	<div class="col-xs-8 col-sm-9">
	<a href="#">
		<h4>Cycling Shoes Made Simple</h4>
		<p>Clip in with one of these 15 cycling shoes and really rack up the miles on your bike this year.</p>
	</a>
	</div>
</section>
<hr/>
<section class="row">
	<div class="col-xs-4 col-sm-3">
	<a href="#"><img class="img-responsive" src="img/thumb/img3.jpg" alt="5 Reasons to Thank Your Workout Buddy"/></a>
	</div>
	<div class="col-xs-8 col-sm-9">
	<a href="#">
		<h4>5 Reasons to Thank Your Workout Buddy</h4>
		<p>Venus has Serena. Beyonce has Jay-Z. Peanut butter has jelly. One good thing transforms to something great with the help of the perfect pairing. Another thing that's better as a duet? Your workout! Here's why there's strength in numbers.</p>
	</a>
	</div>
</section>
<hr/>
</div>
<!-- News end -->
<div class="col-sm-2">
</div>
</div>
</div>
</body>
</html>
