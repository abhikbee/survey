<?php
include('inc/config.php');
$emailErr = $agree = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["agree"])) $agree = $_POST["agree"];
	if ($agree != 'Yes') {
		$emailErr = '<span class="message error">Please agree to our policy!</span>';
	}else {
		$uID = uniqid();
		// Store Session Data
		if(!isset($_COOKIE['starbucks_user'])) {
			setcookie("starbucks_user", $uID, time()+3600);  /* expire in 1 hour */
			$identifier = $_COOKIE['starbucks_user'];
		} else {
			$identifier = $_COOKIE['starbucks_user'];
		}
		$sql = "insert into survey(identifier,status) values ('$uID',0)";
		if (mysql_query($sql)) {
			header('Location: intro.php');
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
}
?>
<?php include('inc/header.php'); ?>
<section class="slideBlock" id="intro">
  <div class="container">
    <h1 class="logo"><img src="<?php echo $siteurl; ?>images/logo.jpg" alt="Starbucks" title="Starbucks"></h1>
    <p>Welcome to the online Starbucks Rewards program research! Thank you for taking part in this research. We really appreciate it! The study involves a series of tests assessing two types of reward programs and will take you 15 to 20 minutes to complete. Upon successful completion of the three parts, please remember to enter your first and last name, as well as email to receive your $5 e-gift card.</p>
    <div class="emailForm">
      <form name="emailverify" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <?php echo $emailErr; ?>
        <div class="checkBox cf">
        <input class="icheck" type="checkbox" name="agree" value="Yes" id="agree">
        <label for="agree">I understand the statements above, and freely consent to participate in the study, rewards subject to the discretion of the researchers. </label>
        </div>
        <input type="submit" value="Continue" name="continue" class="continueBtn introBtn" disabled>
      </form>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>