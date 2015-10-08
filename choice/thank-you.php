<?php
include('../config.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Starbucks Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic|Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo $siteurl; ?>css/style.css" rel="stylesheet">
<script src="<?php echo $siteurl; ?>js/modernizr.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?php echo $siteurl; ?>js/jquery.min.js"></script> 
<!--[if lte IE 9]>
  <script src="js/ie.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<section class="slideBlock" id="thankyou">
	<div class="loaderDiv">
      <div class="loader">Loading...</div>
    </div>
  <img src="<?php echo $siteurl; ?>images/glass.png" alt="" class="glass">
  <div class="container">
  <h1>Thank you for participating in this online experiment.</h1>
<div class="resultBlock">

<p><strong>Your randomly selected round is Round 7.</strong><br>
In this round, you were given a choice between Choice A (one star + $9.75) and Choice B ($10) – You selected Choice B. If Part 2 is selected for your payoff, we will give you one star credit $9.75 in gift certificates. </p>
</div>
<p>Thank you for completing Part 1 and Part 2 of the online experiment! One of your choices from Parts 1 to 3 are going to be randomly selected to determine your final payoff.</p>
<p>Part 3, the final part of this experiment, will take approximately 5-7 minutes to complete. Please read the instructions carefully and click on the continue button to begin.</p>
<a href="#" class="continueBtn">Continue</a>
  </div>
  <div class="progressBar">
  	<div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3 done"><span class="fillBG"></span></div>
    <div class="progressStep ra4 done"><span class="fillBG"></span></div>
    <div class="progressStep ra5 done"><span class="fillBG"></span></div>
  </div>
</section>
<script type="text/javascript" src="<?php echo $siteurl; ?>js/general.js"></script>
</body>
</html>