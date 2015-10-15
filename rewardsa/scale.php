<?php
include('../inc/config.php');
$opError = $asg1 =  $asg2 =  $asg3 =  $asg4 =  $asg5 = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['asg1'])){$asg1 = trim($_POST['asg1']);}else {$hasError = true;}
	if (isset($_POST['asg2'])){$asg2 = trim($_POST['asg2']);}else {$hasError = true;}
	if (isset($_POST['asg3'])){$asg3 = trim($_POST['asg3']);}else {$hasError = true;}
	if (isset($_POST['asg4'])){$asg4 = trim($_POST['asg4']);}else {$hasError = true;}
	if (isset($_POST['asg5'])){$asg5 = trim($_POST['asg5']);}else {$hasError = true;}
	
	if (!isset($hasError)) {

		$sql = "UPDATE survey SET scale_quesion_a1 = '".$asg1."', scale_quesion_a2 = '".$asg2."', scale_quesion_a3 = '".$asg3."', scale_quesion_a4 = '".$asg4."', scale_quesion_a5 = '".$asg5."' WHERE identifier='".$identifier."';";
		//echo $sql;

			if (mysql_query($sql)) {
				//echo "New record created successfully";
				header('Location: ../rewardsb/');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		
		//header('Location: preferred.php');		
	} else {
		$opError = '<div class="message error">Please complete all the questions</div>';
	}
}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock" id="scale">
<div class="variableInfo"><span class="active"></span><span></span><span></span>&nbsp;&nbsp;PART 1 of 3</div>
  <div class="container">
    <form name="rewardAForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <?php echo $opError; ?>
      <div class="cf">
        <div class="rewardAForm">
          <h2>Rewards A</h2>
          <div class="scaleForm">
            <div class="formRow">
              <h3>I feel encouraged to make additional purchases. </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg1" value="Strongly Disagree" id="asg11" <?php if ($asg1 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="asg11"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="Disagree" id="asg12" <?php if ($asg1 == 'Disagree') { echo 'checked';} ?>>
                  <label for="asg12"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="Neutral" id="asg13" <?php if ($asg1 == 'Neutral') { echo 'checked';} ?>>
                  <label for="asg13"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="" id="asg14" <?php if ($asg1 == 'Agree') { echo 'checked';} ?>>
                  <label for="asg14"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="Strongly Agree" id="asg15" <?php if ($asg1 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="asg15"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>Your friends and colleagues will be motivated to visit Starbucks more often</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg2" value="Strongly Disagree" id="asg21" <?php if ($asg2 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="asg21"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="Disagree" id="asg22" <?php if ($asg2 == 'Disagree') { echo 'checked';} ?>>
                  <label for="asg22"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="Neutral" id="asg23" <?php if ($asg2 == 'Neutral') { echo 'checked';} ?>>
                  <label for="asg23"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="Agree" id="asg24" <?php if ($asg2 == 'Agree') { echo 'checked';} ?>>
                  <label for="asg24"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="Strongly Agree" id="asg25" <?php if ($asg2 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="asg25"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>I feel encouraged to make purchases at Starbucks frequently </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg3" value="Strongly Disagree" id="asg31" <?php if ($asg3 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="asg31"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="Disagree" id="asg32" <?php if ($asg3 == 'Disagree') { echo 'checked';} ?>>
                  <label for="asg32"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="Neutral" id="asg33" <?php if ($asg3 == 'Neutral') { echo 'checked';} ?>>
                  <label for="asg33"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="Agree" id="asg34" <?php if ($asg3 == 'Agree') { echo 'checked';} ?>>
                  <label for="asg34"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="Strongly Agree" id="asg35" <?php if ($asg3 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="asg35"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>I feel positive about the reward given under this program </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg4" value="Strongly Disagree" id="asg41" <?php if ($asg4 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="asg41"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="Disagree" id="asg42" <?php if ($asg4 == 'Disagree') { echo 'checked';} ?>>
                  <label for="asg42"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="Neutral" id="asg43" <?php if ($asg4 == 'Neutral') { echo 'checked';} ?>>
                  <label for="asg43"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="Agree" id="asg44" <?php if ($asg4 == 'Agree') { echo 'checked';} ?>>
                  <label for="asg44"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="Strongly Agree" id="asg45" <?php if ($asg4 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="asg45"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How happy would you be to pay for someone else’s coffee? </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg5" value="Not at all Happy" id="asg51" <?php if ($asg5 == 'Not at all Happy') { echo 'checked';} ?>>
                  <label for="asg51"><span class="value">1</span>Not at all Happy</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="Not Very Happy" id="asg52" <?php if ($asg5 == 'Not Very Happy') { echo 'checked';} ?>>
                  <label for="asg52"><span class="value">2</span>Not Very Happy</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="Neutral" id="asg53" <?php if ($asg5 == 'Neutral') { echo 'checked';} ?>>
                  <label for="asg53"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="Somewhat Happy" id="asg54" <?php if ($asg5 == 'Somewhat Happy') { echo 'checked';} ?>>
                  <label for="asg54"><span class="value">4</span>Somewhat Happy</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="Very Happy" id="asg55" <?php if ($asg5 == 'Very Happy') { echo 'checked';} ?>>
                  <label for="asg55"><span class="value">5</span>Very Happy</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="rewardBForm">
          <div class="rewardsAStar">
            <ul>
              <?php for ($cnt = 1; $cnt <= 12; $cnt++) { ?>
              <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          
        </div>
      </div>
      <input type="submit" value="Continue" name="continue" class="continueBtn">
    </form>
  </div>
  <div class="progressBar">
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>