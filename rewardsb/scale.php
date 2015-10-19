<?php
include('../inc/config.php');
$opError = $bsg1 =  $bsg2 =  $bsg3 =  $bsg4 =  $bsg5= '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['bsg1'])){$bsg1 = trim($_POST['bsg1']);}else {$hasError = true;}
	if (isset($_POST['bsg2'])){$bsg2 = trim($_POST['bsg2']);}else {$hasError = true;}
	if (isset($_POST['bsg3'])){$bsg3 = trim($_POST['bsg3']);}else {$hasError = true;}
	if (isset($_POST['bsg4'])){$bsg4 = trim($_POST['bsg4']);}else {$hasError = true;}
	if (isset($_POST['bsg5'])){$bsg5 = trim($_POST['bsg5']);}else {$hasError = true;}
	
	
	if (!isset($hasError)) {
		$sql = "UPDATE survey SET scale_quesion_b1 = '".$bsg1."', scale_quesion_b2 = '".$bsg2."', scale_quesion_b3 = '".$bsg3."', scale_quesion_b4 = '".$bsg4."', scale_quesion_b5 = '".$bsg5."' WHERE identifier='".$identifier."';";

			if (mysql_query($sql)) {
				header('Location: ../preferred.php');
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
          <div class="rewardsBStar">
            <ul>
              <?php for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
              <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
        </div>
        <div class="rewardBForm">
          <h2>Rewards B</h2>
          <div class="scaleForm">
            <div class="formRow">
              <h3>I feel encouraged to make additional purchases. </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="Strongly Disagree" id="bsg11" <?php if ($bsg1 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="bsg11"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="Disagree" id="bsg12" <?php if ($bsg1 == 'Disagree') { echo 'checked';} ?>>
                  <label for="bsg12"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="Neutral" id="bsg13" <?php if ($bsg1 == 'Neutral') { echo 'checked';} ?>>
                  <label for="bsg13"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="Agree" id="bsg14" <?php if ($bsg1 == 'Agree') { echo 'checked';} ?>>
                  <label for="bsg14"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="Strongly Agree" id="bsg15" <?php if ($bsg1 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="bsg15"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>Your friends and colleagues will be motivated to visit Starbucks more often </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="Strongly Disagree" id="bsg21" <?php if ($bsg2 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="bsg21"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="Disagree" id="bsg22" <?php if ($bsg2 == 'Disagree') { echo 'checked';} ?>>
                  <label for="bsg22"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="Neutral" id="bsg23" <?php if ($bsg2 == 'Neutral') { echo 'checked';} ?>>
                  <label for="bsg23"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="Agree" id="bsg24" <?php if ($bsg2 == 'Agree') { echo 'checked';} ?>>
                  <label for="bsg24"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="Strongly Agree" id="bsg25" <?php if ($bsg2 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="bsg25"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>I am encouraged to make purchases at Starbucks frequently </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="Strongly Disagree" id="bsg31" <?php if ($bsg3 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="bsg31"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="Disagree" id="bsg32" <?php if ($bsg3 == 'Disagree') { echo 'checked';} ?>>
                  <label for="bsg32"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="Neutral" id="bsg33" <?php if ($bsg3 == 'Neutral') { echo 'checked';} ?>>
                  <label for="bsg33"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="Agree" id="bsg34" <?php if ($bsg3 == 'Agree') { echo 'checked';} ?>>
                  <label for="bsg34"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="Strongly Agree" id="bsg35" <?php if ($bsg3 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="bsg35"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>I feel satisfied with the rewards received in this program.</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="Strongly Disagree" id="bsg41" <?php if ($bsg4 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="bsg41"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="Disagree" id="bsg42" <?php if ($bsg4 == 'Disagree') { echo 'checked';} ?>>
                  <label for="bsg42"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="Neutral" id="bsg43" <?php if ($bsg4 == 'Neutral') { echo 'checked';} ?>>
                  <label for="bsg43"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="Agree" id="bsg44" <?php if ($bsg4 == 'Agree') { echo 'checked';} ?>>
                  <label for="bsg44"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="Strongly Agree" id="bsg45" <?php if ($bsg4 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="bsg45"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>I am happy to pay for someone else’s coffee </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="Strongly Disagree" id="bsg51" <?php if ($bsg5 == 'Strongly Disagree') { echo 'checked';} ?>>
                  <label for="bsg51"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="Disagree" id="bsg52" <?php if ($bsg5 == 'Disagree') { echo 'checked';} ?>>
                  <label for="bsg52"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="Neutral" id="bsg53" <?php if ($bsg5 == 'Neutral') { echo 'checked';} ?>>
                  <label for="bsg53"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="Agree" id="bsg54" <?php if ($bsg5 == 'Agree') { echo 'checked';} ?>>
                  <label for="bsg54"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="Strongly Agree" id="bsg55" <?php if ($bsg5 == 'Strongly Agree') { echo 'checked';} ?>>
                  <label for="bsg55"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
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