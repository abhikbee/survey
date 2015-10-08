<?php
include('../inc/config.php');
$email = $_SESSION['login_user'];
$opError = $choice = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['choice'])){$choice = trim($_POST['choice']);}else {$hasError = true;}
	if (!isset($hasError)) {
		//$sql = "INSERT INTO choice (`email`, `choicequestion1`) VALUES ('".$email."', '".$choice."')";
		$sql = "UPDATE survey SET choicequestion17='".$choice."' WHERE email='".$email."';";

		//echo $sql;
			if (mysql_query($sql)) {
				//echo "New record created successfully";
				header('Location: question18.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	} else {
		$opError = '<div class="message error">Please select any one option.</div>';
	}
}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock" id="choicePage">
  <div class="loaderDiv">
    <div class="loader">Loading...</div>
  </div>
  <img src="<?php echo $siteurl; ?>images/glass.png" alt="" class="glass">
  <div class="container">
    <p class="desc">Please click Choice A to avail (Enter dollar value) and one star under this reward structure or click Choice B to avail (Enter dollar value)</p>
    <form name="rewardPreferred" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="cf">
        <div class="choiceBlock choiceA">
          <div class="choicePrice">$10</div>
          <div class="choiceRadio">
            <input class="icheck" type="radio" name="choice" value="Choice A" id="choiceA">
            <label for="choiceA">Choice A</label>
          </div>
        </div>
        <div class="choiceBlock choiceB">
          <div class="starPrice">$9.25</div>
          <div class="rewardsAStar">
            <ul>
              <?php $active = 1; for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
              <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <div class="choiceRadio">
            <input class="icheck" type="radio" name="choice" value="Choice B" id="choiceB">
            <label for="choiceB">Choice B</label>
          </div>
        </div>
      </div>
      <?php echo $opError; ?>
      <input type="submit" value="Continue" name="continue" class="continueBtn">
    </form>
  </div>
  <div class="progressBar">
    <div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3 done"><span class="fillBG"></span></div>
    <div class="progressStep ra4 done"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG" style="height:80%"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>