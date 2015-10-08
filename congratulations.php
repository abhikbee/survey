<?php include('inc/config.php'); ?>
<?php include('inc/header.php'); ?>
<section class="slideBlock" id="intro">
	<div class="loaderDiv">
      <div class="loader">Loading...</div>
    </div>
  <img src="<?php echo $siteurl; ?>images/glass.png" alt="" class="glass">
  <div class="container">
    <h1>Congratulations!</h1>
<p>You have successfully completed the Part 1 of the online experimentand can now proceed with Part 2.</p>
<p>In this part of the experiment, you are going to be endowed with $10 at the start of each round and presented with the option of keeping the entire amount or exchanging part of this amount for a star. For the next 20 rounds, you will get the option to exchange this amount for one star under both Rewards A and Rewards B. Please pay close attention as the dollar value to purchase astar will constantly fluctuate and the rewards program will swap after 10 rounds. The final dollar values are converted to gift certificates and stars can be claimed by entering Star codes. One of the choices that you make in these 20 rounds will be selected at random and this may influence your payoff.</p>
<p>This part of the experiment will take approximately 5-7 minutes to complete. Please read the instructions carefully and click on the continue button to begin.</p>
<a href="<?php echo $siteurl; ?>choice/" class="continueBtn">Continue</a>
  </div>
  <div class="progressBar">
  	<div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3 done"><span class="fillBG"></span></div>
    <div class="progressStep ra4 done"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG"></span></div>
  </div>
</section>
<?php include('inc/footer.php'); ?>