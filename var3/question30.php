<?php
include('../inc/config.php');
$opError = $choice = $time = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['choice'])){$choice = trim($_POST['choice']);}else {$hasError = true;}
	if (!isset($hasError)) {
		$time = date('H:i:s', time());
		$sql1 = "UPDATE var3 SET varquestion30='".$choice."', question30time='".$time."'  WHERE identifier='".$identifier."';";
			if (mysql_query($sql1)) {	
				header('Location: question31.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
	}
}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock" id="varPage">
<div class="variableInfo"><span class="active"></span><span class="active"></span><span class="active"></span>&nbsp;&nbsp;PART 3 of 3</div>
  <div class="container">
    <div class="rewardsAStar star125">
            <ul>
              <?php for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
              <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
    <p class="desc">You reload your card through the app</p>
    <p><strong>Which reward do you prefer?</strong></p>
    <form name="rewardPreferred" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="cf">
        <div class="varBlock optionA">
          <div class="offerBlock">2$ off purchases</div>
          <p class="keyBlock">Press <span>E</span> on your keyboard</p>
          <div class="radioBlock"><input type="radio" name="choice" value="E" id="choiceA" class="icheck"></div>
        </div>
        <div class="varBlock optionB">
          <div class="offerBlock">1 bonus star</div>
		  <p class="keyBlock">Press <span>U</span> on your keyboard</p>
          <div class="radioBlock"><input type="radio" name="choice" value="U" id="choiceB" class="icheck"></div>
        </div>
      </div>
      <input type="submit" value="Continue" name="continue" class="continueBtn hidden">
    </form>
  </div>
  <div class="progressBar">
    <div class="progressStep ra5"><span class="fillBG" style="height:90.48%"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>