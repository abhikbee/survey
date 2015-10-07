<?php
session_start();
//echo $_SESSION['login_user'];
include('db.php');
$opError = $asg1 =  $asg2 =  $asg3 =  $asg4 =  $asg5 = $bsg1 =  $bsg2 =  $bsg3 =  $bsg4 =  $bsg5= '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['asg1'])){$asg1 = trim($_POST['asg1']);}else {$hasError = true;}
	if (isset($_POST['asg2'])){$asg2 = trim($_POST['asg2']);}else {$hasError = true;}
	if (isset($_POST['asg3'])){$asg3 = trim($_POST['asg3']);}else {$hasError = true;}
	if (isset($_POST['asg4'])){$asg4 = trim($_POST['asg4']);}else {$hasError = true;}
	if (isset($_POST['asg5'])){$asg5 = trim($_POST['asg5']);}else {$hasError = true;}
	if (isset($_POST['bsg1'])){$bsg1 = trim($_POST['bsg1']);}else {$hasError = true;}
	if (isset($_POST['bsg2'])){$bsg2 = trim($_POST['bsg2']);}else {$hasError = true;}
	if (isset($_POST['bsg3'])){$bsg3 = trim($_POST['bsg3']);}else {$hasError = true;}
	if (isset($_POST['bsg4'])){$bsg4 = trim($_POST['bsg4']);}else {$hasError = true;}
	if (isset($_POST['bsg5'])){$bsg5 = trim($_POST['bsg5']);}else {$hasError = true;}
	
	
	if (!isset($hasError)) {
		
		echo 'jay';
		
	} else {
		$opError = '<div class="message error">Please select one option in question.</div>';
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Starbucks Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic|Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link type="text/css" href="css/style.css" rel="stylesheet">
<script src="js/modernizr.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--[if lte IE 9]>
  <script src="js/ie.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<section class="slideBlock" id="scale">
<div class="loaderDiv">
      <div class="loader">Loading...</div>
    </div>
 <img src="images/glass.png" alt="" class="glass">
  <div class="container">
    <form name="rewardAForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <?php echo $opError; ?>
      <div class="cf">
        <div class="rewardAForm">
        <h2>Rewards A</h2>
          <div class="scaleForm">
            
            <div class="formRow">
              <h3>Are you encouraged to make additional purchases? </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg1" value="1" id="asg11" <?php if ($asg1 == 1) { echo 'checked';} ?>>
                  <label for="asg11"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="2" id="asg12" <?php if ($asg1 == 2) { echo 'checked';} ?>>
                  <label for="asg12"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="3" id="asg13" <?php if ($asg1 == 3) { echo 'checked';} ?>>
                  <label for="asg13"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="4" id="asg14" <?php if ($asg1 == 4) { echo 'checked';} ?>>
                  <label for="asg14"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg1" value="5" id="asg15" <?php if ($asg1 == 5) { echo 'checked';} ?>>
                  <label for="asg15"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How happy would you be to pay for someone else’s coffee?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg2" value="1" id="asg21" <?php if ($asg2 == 1) { echo 'checked';} ?>>
                  <label for="asg21"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="2" id="asg22" <?php if ($asg2 == 2) { echo 'checked';} ?>>
                  <label for="asg22"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="3" id="asg23" <?php if ($asg2 == 3) { echo 'checked';} ?>>
                  <label for="asg23"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="4" id="asg24" <?php if ($asg2 == 4) { echo 'checked';} ?>>
                  <label for="asg24"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg2" value="5" id="asg25" <?php if ($asg2 == 5) { echo 'checked';} ?>>
                  <label for="asg25"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How would you rate your overall experience with these rewards?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg3" value="1" id="asg31" <?php if ($asg3 == 1) { echo 'checked';} ?>>
                  <label for="asg31"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="2" id="asg32" <?php if ($asg3 == 2) { echo 'checked';} ?>>
                  <label for="asg32"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="3" id="asg33" <?php if ($asg3 == 3) { echo 'checked';} ?>>
                  <label for="asg33"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="4" id="asg34" <?php if ($asg3 == 4) { echo 'checked';} ?>>
                  <label for="asg34"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg3" value="5" id="asg35" <?php if ($asg3 == 5) { echo 'checked';} ?>>
                  <label for="asg35"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How satisfied are you with the comprehensiveness of the offer?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg4" value="1" id="asg41" <?php if ($asg4 == 1) { echo 'checked';} ?>>
                  <label for="asg41"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="2" id="asg42" <?php if ($asg4 == 2) { echo 'checked';} ?>>
                  <label for="asg42"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="3" id="asg43" <?php if ($asg4 == 3) { echo 'checked';} ?>>
                  <label for="asg43"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="4" id="asg44" <?php if ($asg4 == 4) { echo 'checked';} ?>>
                  <label for="asg44"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg4" value="5" id="asg45" <?php if ($asg4 == 5) { echo 'checked';} ?>>
                  <label for="asg45"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How would you rate the value received for these rewards?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="asg5" value="1" id="asg51" <?php if ($asg5 == 1) { echo 'checked';} ?>>
                  <label for="asg51"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="2" id="asg52" <?php if ($asg5 == 2) { echo 'checked';} ?>>
                  <label for="asg52"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="3" id="asg53" <?php if ($asg5 == 3) { echo 'checked';} ?>>
                  <label for="asg53"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="4" id="asg54" <?php if ($asg5 == 4) { echo 'checked';} ?>>
                  <label for="asg54"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="asg5" value="5" id="asg55" <?php if ($asg5 == 5) { echo 'checked';} ?>>
                  <label for="asg55"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="rewardBForm">
        <h2>Rewards B</h2>
          <div class="scaleForm">
            
            <div class="formRow">
              <h3>Are you encouraged to make additional purchases? </h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="1" id="bsg11" <?php if ($bsg1 == 1) { echo 'checked';} ?>>
                  <label for="bsg11"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="2" id="bsg12" <?php if ($bsg1 == 2) { echo 'checked';} ?>>
                  <label for="bsg12"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="3" id="bsg13" <?php if ($bsg1 == 3) { echo 'checked';} ?>>
                  <label for="bsg13"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="4" id="bsg14" <?php if ($bsg1 == 4) { echo 'checked';} ?>>
                  <label for="bsg14"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg1" value="5" id="bsg15" <?php if ($bsg1 == 5) { echo 'checked';} ?>>
                  <label for="bsg15"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How happy would you be to pay for someone else’s coffee?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="1" id="bsg21" <?php if ($bsg2 == 1) { echo 'checked';} ?>>
                  <label for="bsg21"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="2" id="bsg22" <?php if ($bsg2 == 2) { echo 'checked';} ?>>
                  <label for="bsg22"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="3" id="bsg23" <?php if ($bsg2 == 3) { echo 'checked';} ?>>
                  <label for="bsg23"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="4" id="bsg24" <?php if ($bsg2 == 4) { echo 'checked';} ?>>
                  <label for="bsg24"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg2" value="5" id="bsg25" <?php if ($bsg2 == 5) { echo 'checked';} ?>>
                  <label for="bsg25"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How would you rate your overall experience with these rewards?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="1" id="bsg31" <?php if ($bsg3 == 1) { echo 'checked';} ?>>
                  <label for="bsg31"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="2" id="bsg32" <?php if ($bsg3 == 2) { echo 'checked';} ?>>
                  <label for="bsg32"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="3" id="bsg33" <?php if ($bsg3 == 3) { echo 'checked';} ?>>
                  <label for="bsg33"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="4" id="bsg34" <?php if ($bsg3 == 4) { echo 'checked';} ?>>
                  <label for="bsg34"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg3" value="5" id="bsg35" <?php if ($bsg3 == 5) { echo 'checked';} ?>>
                  <label for="bsg35"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How satisfied are you with the comprehensiveness of the offer?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="1" id="bsg41" <?php if ($bsg4 == 1) { echo 'checked';} ?>>
                  <label for="bsg41"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="2" id="bsg42" <?php if ($bsg4 == 2) { echo 'checked';} ?>>
                  <label for="bsg42"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="3" id="bsg43" <?php if ($bsg4 == 3) { echo 'checked';} ?>>
                  <label for="bsg43"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="4" id="bsg44" <?php if ($bsg4 == 4) { echo 'checked';} ?>>
                  <label for="bsg44"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg4" value="5" id="bsg45" <?php if ($bsg4 == 5) { echo 'checked';} ?>>
                  <label for="bsg45"><span class="value">5</span>Strongly Agree</label>
                </li>
              </ul>
            </div>
            <div class="formRow">
              <h3>How would you rate the value received for these rewards?</h3>
              <ul class="scaleUL">
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="1" id="bsg51" <?php if ($bsg5 == 1) { echo 'checked';} ?>>
                  <label for="bsg51"><span class="value">1</span>Strongly Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="2" id="bsg52" <?php if ($bsg5 == 2) { echo 'checked';} ?>>
                  <label for="bsg52"><span class="value">2</span>Disagree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="3" id="bsg53" <?php if ($bsg5 == 3) { echo 'checked';} ?>>
                  <label for="bsg53"><span class="value">3</span>Neutral</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="4" id="bsg54" <?php if ($bsg5 == 4) { echo 'checked';} ?>>
                  <label for="bsg54"><span class="value">4</span>Agree</label>
                </li>
                <li>
                  <input class="icheck" type="radio" name="bsg5" value="5" id="bsg55" <?php if ($bsg5 == 5) { echo 'checked';} ?>>
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
    <div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3"><span class="fillBG"></span></div>
    <div class="progressStep ra4"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG"></span></div>
  </div>
</section>
<script type="text/javascript" src="js/app.js"></script> 
<script type="text/javascript" src="js/general.js"></script>
</body>
</html>