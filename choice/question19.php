<?php
include('../inc/config.php');
$opError = $choice = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['choice'])){$choice = trim($_POST['choice']);}else {$hasError = true;}
	if (!isset($hasError)) {
		$sql = "UPDATE survey SET choicequestion19='".$choice."' WHERE identifier='".$identifier."';";
			if (mysql_query($sql)) {
				header('Location: question20.php');
				
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
<div class="variableInfo"><span class="active"></span><span class="active"></span><span></span>&nbsp;&nbsp;PART 2 of 3</div>
  <div class="container">
    <div class="rewardsAStar choiceStar125">
    <ul>
      <?php $active = 125; for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
      <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
      <?php } ?>
    </ul>
    </div>
    <p class="desc">As a member of Rewards Program B, you can get any food or drink item free with 125 stars. </p>    
    <p><strong>Which reward do you prefer?</strong></p>
    <form name="rewardPreferred" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="cf">
        <div class="choiceBlock choiceA">
          <div class="starPrice">$9.25</div>
          <div class="rewardsAStar">
            <ul>
              <?php $active = 1; for ($cnt = 1; $cnt <= 1; $cnt++) { ?>
              <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <p>$9.25 and One Star under Rewards Program B
</p>
          <div class="choiceRadio">
            <input class="icheck" type="radio" name="choice" value="Choice 1" id="choiceA">
            <label for="choiceA">Choice 1</label>
          </div>
        </div>
        <div class="choiceBlock choiceB">
          <div class="starPrice">$10.00</div>
          <div class="rewardsAStar">
            <ul>
              <?php $active = 1; for ($cnt = 1; $cnt <= 1; $cnt++) { ?>
              <li class="star1"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <p>$10.00 and No Stars under Rewards Program B</p>
          <div class="choiceRadio">
            <input class="icheck" type="radio" name="choice" value="Choice 2" id="choiceB">
            <label for="choiceB">Choice 2</label>
          </div>
        </div>
      </div>
      <?php echo $opError; ?>
      <input type="submit" value="Continue" name="continue" class="continueBtn">
    </form>
  </div>
  <div class="progressBar">
    <div class="progressStep ra5"><span class="fillBG" style="height:90%"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>