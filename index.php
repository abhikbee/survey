<?php
include('inc/config.php');
$emailErr = $email = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST["email"];
	if (empty($email)) {
		$emailErr = '<span class="message error">Please enter your email</span>';
	}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = '<span class="message error">Invalid email format</span>';
	}else {
		
		$query = "SELECT * FROM survey WHERE email='$email'";
		$result = mysql_query($query) or die(mysql_error());
		$count = mysql_num_rows($result);
		
		if ($count == 1){
		 	$emailErr = '<span class="message error">Email address already exists</span>';
		} else {
			$sql = "insert into survey(email,status) values ('$email',0)";
			if (mysql_query($sql)) {
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
<?php include('inc/header.php'); ?>
<section class="slideBlock" id="intro">
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
<?php include('inc/footer.php'); ?>