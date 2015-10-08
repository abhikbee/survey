<?php
include('config.php');
$email = $_SESSION['login_user'];
$opError = $preferred = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['preferred'])){$preferred = trim($_POST['preferred']);}else {$hasError = true;}
	if (!isset($hasError)) {
		$sql = "INSERT INTO preferred (`email`, `preferred`) VALUES ('".$email."', '".$preferred."')";
		//echo $sql;
			if ($conn->query($sql) === TRUE) {
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
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Starbucks Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic|Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link type="text/css" href="<?php echo $siteurl; ?>css/style.css" rel="stylesheet">
<script src="<?php echo $siteurl; ?>js/modernizr.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $siteurl; ?>js/jquery.min.js"></script>
<!--[if lte IE 9]>
  <script src="js/ie.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<section class="slideBlock" id="rewardPreferred">
  <div class="loaderDiv">
    <div class="loader">Loading...</div>
  </div>
  <img src="<?php echo $siteurl; ?>images/glass.png" alt="" class="glass">
  <div class="container">
    <form name="rewardPreferred" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
    <div class="progressStep ra1 done"><span class="fillBG"></span></div>
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
    <div class="progressStep ra3 done"><span class="fillBG"></span></div>
    <div class="progressStep ra4"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG"></span></div>
  </div>
</section>
<script type="text/javascript" src="<?php echo $siteurl; ?>js/app.js"></script> 
<script type="text/javascript" src="<?php echo $siteurl; ?>js/general.js"></script>
</body>
</html>