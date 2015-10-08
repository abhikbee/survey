<?php include('../config.php'); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Starbucks Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic|Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo $siteurl; ?>css/style.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo $siteurl; ?>js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo $siteurl; ?>js/jquery.min.js"></script>
<!--[if lte IE 9]>
  <script src="js/ie.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<section class="slideBlock"><img src="<?php echo $siteurl; ?>images/glass.png" alt="" class="glass">
  <div class="container">
    <div class="loaderDiv">
      <div class="loader">Loading...</div>
    </div>
    <div class="question" id="questionBDone">
    	<h1>Congratulations!</h1>
       <p>You’ve collected 125 stars under Rewards B – You’re next drink is on us. Please select one free item and click the Continue button to proceed.
</p>

      <div class="cf">
        <div class="rewardsProducts">
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp1.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp2.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp3.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp4.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp5.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp6.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp7.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp8.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp9.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp10.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp11.jpg"></div>
          <div class="productBlock"> <img src="<?php echo $siteurl; ?>images/rp12.jpg"></div>
        </div>
      </div>
      <a href="<?php echo $siteurl; ?>scale.php" class="continueBtn disable">Continue</a> </div>
  </div>
  <div class="progressBar">
    <div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3"><span class="fillBG"></span></div>
    <div class="progressStep ra4"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG"></span></div>
  </div>
</section>
<script type="text/javascript" src="<?php echo $siteurl; ?>js/general.js"></script>
</body>
</html>
