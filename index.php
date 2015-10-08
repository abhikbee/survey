<?php
include('config.php');
$emailErr = $email = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	if (empty($email)) {
		$emailErr = '<span class="message error">Please enter your email</span>';
	}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = '<span class="message error">Invalid email format</span>';
	}else {
		$result = mysql_query("SELECT COUNT(*) FROM email WHERE `email` = '$email'");
		if (mysql_result($result, 0, 0) > 0) {
			$emailErr = '<span class="message error">Email address already exists</span>';
		} else {
			$sql = "insert into survey(email,status) values ('$email',0)";
			if ($conn->query($sql) === TRUE) {
				// Store Session Data
				$_SESSION['login_user']= $email; 
				header('Location: rewardsa');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
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
<section class="slideBlock" id="intro">
	<div class="loaderDiv">
      <div class="loader">Loading...</div>
    </div>
  <img src="<?php echo $siteurl; ?>images/glass.png" alt="" class="glass">
  <div class="container">
    <h1 class="logo"><img src="<?php echo $siteurl; ?>images/logo.jpg" alt="Starbucks" title="Starbucks"></h1>
    <p>Welcome to this 3-part online experiment! The experiment involves a series of tasks assessing two types of reward programs and will take about 15 to 20 minutes to complete. At the end of the experiment, <strong>one of your choices</strong> will be selected at random to <strong>determine your final payoff</strong>.</p>
    <p>In Part 1, you will be guided through a virtual Starbucks store to make a series of notional purchase decisions; collecting points under Rewards A and Rewards B. Please <strong>pay close attention</strong> to the points received under the two programs. Once you collect sufficient points for a free item under Rewards A, you can select a free item of your choice. Then you will make the same purchases under Rewards B until you collect points to redeem a free item. In the end of Part 1, we will ask you to indicate your preferred rewards program across five parameters.</p>
    <p>After <strong>15 seconds</strong>, the <strong>continue</strong> button will become active and you can click this to go to the next screen. Part 1 of the experiment will take about 5-7 minutes to complete. We request that you give your undivided attention while making decisions as it may influence the reward you receive.</p>
    <div class="emailForm">
      <form name="emailverify" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <?php echo $emailErr; ?>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" class="inputBox" placeholder="Enter your email address">
        <input type="submit" value="Continue" name="continue" class="continueBtn introBtn" disabled>
      </form>
    </div>
  </div>
  <div class="progressBar">
  	<div class="progressStep ra1"><span class="fillBG"></span></div>
    <div class="progressStep ra2"><span class="fillBG"></span></div>
    <div class="progressStep ra3"><span class="fillBG"></span></div>
    <div class="progressStep ra4"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG"></span></div>
  </div>
</section>
<script type="text/javascript" src="<?php echo $siteurl; ?>js/general.js"></script>
</body>
</html>