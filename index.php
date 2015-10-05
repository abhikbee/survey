<?php
include('db.php');
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
			mysql_query("insert into email(email,status) values ('$email',0)");
			header('Location: rewardsa');
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
<link type="text/css" href="css/style.css" rel="stylesheet">
<script src="js/modernizr.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<!--[if lte IE 9]>
  <script src="js/ie.js" type="text/javascript"></script>
<![endif]-->
</head>
<body>
<section class="slideBlock" id="intro">
  <img src="images/glass.png" alt="" class="glass">
  <div class="container">
    <h1 class="logo"><img src="images/logo.jpg" alt="Starbucks" title="Starbucks"></h1>
    <p>Welcome to this 2-part online experiment! The experiment involves reviewing two types of reward programs - <strong>Rewards A</strong> and <strong>Rewards B</strong>. The <strong>choices that you make</strong> in this experiment will <strong>impact your final payoff</strong>.</p>
    <p>In Part 1, you will be displayed a screen with a series of hypothetical purchase decisions with the corresponding points obtained under Rewards A and Rewards B. Please <strong>pay close attention</strong> to the <strong>points received under the two programs</strong>. Once you collect sufficient points for a free item under Rewards A, we will direct you to collect points under Rewards B. In the end of Part 1, we will ask you to indicated your preferred rewards program and ratings across five parameters.</p>
    <p>After <strong>15 seconds</strong>, the <strong>continue</strong> button will become active and you can click this to go to the next screen. Part 1 of the experiment will take about 6-8 minutes to complete. We request that you give your undivided attention while making a decision.</p>
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
<script type="text/javascript" src="js/general.js"></script>
</body>
</html>