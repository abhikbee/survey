<?php
include('../inc/config.php');
$email = $_SESSION['login_user'];
$sql = "UPDATE survey SET status = 1 WHERE email='".$email."';";
if (mysql_query($sql)) {
	//echo "New record created successfully";
	//header('Location: thank-you.php');
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock" id="thankyou">
  <div class="container">
    <h1>Thank you for participating in this online experiment.</h1>
    <div class="resultBlock">
      <p><strong>Your randomly selected round is Round 7.</strong><br>
        In this round, you were given a choice between Choice A (one star + $9.75) and Choice B ($10) – You selected Choice B. If Part 2 is selected for your payoff, we will give you one star credit $9.75 in gift certificates. </p>
    </div>
    <p>Thank you for completing Part 1 and Part 2 of the online experiment! One of your choices from Parts 1 to 3 are going to be randomly selected to determine your final payoff.</p>
    <p>Part 3, the final part of this experiment, will take approximately 5-7 minutes to complete. Please read the instructions carefully and click on the continue button to begin.</p>
    <a href="#" class="continueBtn">Continue</a> </div>
  <?php /*?><div class="progressBar">
  	<div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3 done"><span class="fillBG"></span></div>
    <div class="progressStep ra4 done"><span class="fillBG"></span></div>
    <div class="progressStep ra5 done"><span class="fillBG"></span></div>
  </div><?php */?>
</section>
<?php include('../inc/footer.php'); ?>