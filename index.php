<?php
include('inc/config.php');
$emailErr = $agree = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(!empty($_POST["agree"])) $agree = $_POST["agree"];
	if ($agree != 'Yes') {
		$emailErr = '<span class="message error">Please confirm that the statement above is true. Thank You!</span>';
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
   
   <p>Welcome! Thank you for taking the time to participate in this online Starbucks research. At Starbucks, we want to provide you with the very best customer experience. To do this, we need input from customers like you.</p>
<p>This study is being conducted by Ogilvy & Mather's behavioural science practice OgilvyChange, on behalf of Starbucks, and will take approximately 20 minutes to complete. Your answers will be used for research purposes only. You will not receive any marketing or sales calls as a direct result of your participation in this research study.</p>
<p>Your participation in this survey is voluntary and your feedback is anonymous. Your individual answers will remain confidential and will be used to improve Starbucks products and services.​</p>
<p>Thank you again for your participation. In appreciation of your time and thoughtful responses, should you complete the survey, you will receive a $5 Starbucks e-Gift Card.</p>
 
   
    <div class="emailForm">
      <form name="emailverify" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        
        <div class="checkBox cf">
        <input class="icheck" type="checkbox" name="agree" value="Yes" id="agree">
        <label for="agree">I am 18 years of age or older, understand the statements above and freely consent to participate in the study; rewards subject to the discretion of the researchers.</label>
        </div>
        <input type="submit" value="Continue" name="continue" class="continueBtn introBtn" disabled>
        <?php echo $emailErr; ?>
      </form>
    </div>
  </div>
</section>
<?php include('inc/footer.php'); ?>