<?php
include('../inc/config.php');
$opError = $choice = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['choice'])){$choice = trim($_POST['choice']);}else {$hasError = true;}
	if (!isset($hasError)) {
		$sql = "UPDATE survey SET choicequestion4='".$choice."' WHERE identifier='".$identifier."';";
			if (mysql_query($sql)) {	
				header('Location: question5.php');
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
    <div class="rewardsAStar choiceStar">
            <ul>
              <?php $active = 12; for ($cnt = 1; $cnt <= 12; $cnt++) { ?>
              <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
    <p class="desc">As a member of Rewards Program A, you can get any food or drink item free with 12 stars. </p>
    <form name="rewardPreferred" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="cf">
        <div class="choiceBlock choiceA">
          <div class="starPrice">$9.50</div>
          <div class="rewardsAStar">
            <ul>
             <?php $active = 1; $star = 1; for ($cnt = 1; $cnt <= $star; $cnt++) { ?>
              <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <p>Choice 1 to avail $9.50 and one star under Rewards Program A</p>
          <div class="choiceRadio">
            <input class="icheck" type="radio" name="choice" value="Choice A" id="choiceA">
            <label for="choiceA">Choice A</label>
          </div>
        </div>
        <div class="choiceBlock choiceB">
          <div class="starPrice">$9.50</div>
          <div class="rewardsAStar">
            <ul>
             <?php $active = 1; $star = 1; for ($cnt = 1; $cnt <= $star; $cnt++) { ?>
              <li class="star1 "><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <p>Choice 2 to avail $9.50 and no stars under Rewards Program A</p>
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
    <div class="progressStep ra5"><span class="fillBG" style="height:15%"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>