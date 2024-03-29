<?php
include('inc/config.php');
$opError = $preferred = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['preferred'])){$preferred = trim($_POST['preferred']);}else {$hasError = true;}
	if (!isset($hasError)) {
		//$sql = "INSERT INTO preferred (`identifier`, `preferred`) VALUES ('".$identifier."', '".$preferred."')";
		$sql = "UPDATE survey SET preferred='".$preferred."' WHERE identifier='".$identifier."';";
		//echo $sql;
			if (mysql_query($sql)) {
				//echo "New record created successfully";
				header('Location: congratulations.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		
		//header('Location: preferred.php');		
	} else {
		$opError = '<div class="message error">Please select one option in question.</div>';
	}
}
?>
<?php include('inc/header.php'); ?>
<section class="slideBlock" id="rewardPreferred">
<div class="variableInfo"><span class="active"></span><span></span><span></span>&nbsp;&nbsp;PART 1 of 3</div>
  <div class="container">
    <form name="rewardPreferred" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <p class="title">Please select your preferred rewards program</p>
      <?php echo $opError; ?>
      <div class="cf rewardPreferred">
        <div class="rewardAPreferred">
          <div class="rewardsAStar">
            <ul>
              <?php for ($cnt = 1; $cnt <= 12; $cnt++) { ?>
              <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <input type="radio" name="preferred" value="Rewards A" id="rewardsa">
          <label for="rewardsa">Rewards A</label>
        </div>
        <div class="rewardCPreferred">
          <div class="rewardsAStar">
            I don't have a preference.
          </div>
          <input type="radio" name="preferred" value="I dont have a preference" id="rewardsc">
          <label for="rewardsc">I don't have a preference</label>
        </div>
        <div class="rewardBPreferred">
          <div class="rewardsAStar">
            <ul>
              <?php for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
              <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <input type="radio" name="preferred" value="Rewards B" id="rewardsb">
          <label for="rewardsb">Rewards B</label>
        </div>
      </div>
      <input type="submit" value="Continue" name="continue" class="continueBtn" disabled>
    </form>
  </div>
  <div class="progressBar">

    <div class="progressStep ra3 done"><span class="fillBG"></span></div>

  </div>
</section>
<?php include('inc/footer.php'); ?>