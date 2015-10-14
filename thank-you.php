<?php
include('inc/config.php');
$identifier = $_SESSION['login_user'];
$opError = $agree = $fname = $lname = $email = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["fname"])) $fname = $_POST["fname"];
	if(!empty($_POST["lname"])) $lname = $_POST["lname"];
	if(!empty($_POST["email"])) $email = $_POST["email"];
	
	if ($fname =='') {$opError = '<div class="message error">Please enter your first name.</div>';}
	else if ($lname =='') {$opError = '<div class="message error">Please enter your last name.</div>';}
	else if ($email =='') {$opError = '<div class="message error">Please enter your email address.</div>';}
	else {
		$sql = "UPDATE survey SET firstname='".$fname."', lastname='".$lname."', email='".$email."', status=1 WHERE identifier='".$identifier."';";
			if (mysql_query($sql)) {	
				header('Location: thanks.php');
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
    <p>Thank you! You have successfully completed the Starbucks Rewards Program online research survey.</p>
	<p>Please fill in the fields below to receive your $5 e-gift card via email.</p>
    <div class="emailForm">
      <form name="emailverify" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="emailForm thanksForm">
			<?php echo $opError; ?>
            <input type="text" name="fname" id="fname" class="inputBox" placeholder="Enter your first name" value="<?php echo $fname; ?>">
            <input type="text" name="lname" id="lname" class="inputBox" placeholder="Enter your Last name" value="<?php echo $lname; ?>">
            <input type="email" name="email" id="email" class="inputBox" placeholder="Enter your email address" value="<?php echo $email; ?>">
        </div>
        <input type="submit" value="Continue" name="continue" class="continueBtn introBtn" disabled>
      </form>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>