<?php
include('../inc/config.php');
$opError = $selected = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['selected'])){$selected = trim($_POST['selected']);}else {$hasError = true;}
	if ($selected == ''){$hasError = true;}
	if (!isset($hasError)) {
		$sql = "UPDATE survey SET rewards_b_product = '".$selected."' WHERE identifier='".$identifier."';";
			if (mysql_query($sql)) {
				header('Location: scale.php');
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}	
	} else {
		$opError = '<div class="message error">Please select any one option.</div>';
	}
}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock">
<div class="variableInfo"><span class="active"></span><span></span><span></span>&nbsp;&nbsp;PART 1 of 3</div>
  <div class="container">
    <div class="question" id="questionDone">
      <h1>Congratulations!</h1>
      <p>You’ve collected 125 stars under Rewards B – You’re next drink is on us. Please select one free item and click the Continue button to proceed. </p>
      <form name="rewardAForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="cf">
        <div class="rewardsProducts">
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp1.jpg"><span class="prdName"><span>Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Latte" id="check1">
            <label class="layer" for="check1"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp2.jpg"><span class="prdName"><span>Mocha</span></span>
            <input class="icheck" type="radio" name="selected" value="Mocha" id="check2">
            <label class="layer" for="check2"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp3.jpg"><span class="prdName"><span>Caramel Machiatto</span></span>
            <input class="icheck" type="radio" name="selected" value="Caramel Machiatto" id="check3">
            <label class="layer" for="check3"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp4.jpg"><span class="prdName"><span>Chai Tea Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Chai Tea Latte" id="check4">
            <label class="layer" for="check4"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp5.jpg"><span class="prdName"><span>Freshly Brewed Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Freshly Brewed Coffee" id="check5">
            <label class="layer" for="check5"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp6.jpg"><span class="prdName"><span>Skinny Vanilla Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Skinny Vanilla Latte" id="check6">
            <label class="layer" for="check6"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp7.jpg"><span class="prdName"><span>Iced Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Iced Coffee" id="check7">
            <label class="layer" for="check7"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp8.jpg"><span class="prdName"><span>Americano</span></span>
            <input class="icheck" type="radio" name="selected" value="Americano" id="check8">
            <label class="layer" for="check8"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp9.jpg"><span class="prdName"><span>Earl Grey Tea</span></span>
            <input class="icheck" type="radio" name="selected" value="Earl Grey Tea" id="check9">
            <label class="layer" for="check9"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp10.jpg"><span class="prdName"><span>Frappuccino</span></span>
            <input class="icheck" type="radio" name="selected" value="Frappuccino" id="check10">
            <label class="layer" for="check10"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp11.jpg"><span class="prdName"><span>Cappuccino</span></span>
            <input class="icheck" type="radio" name="selected" value="Cappuccino" id="check11">
            <label class="layer" for="check11"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp12.jpg"><span class="prdName"><span>Americano</span></span>
            <input class="icheck" type="radio" name="selected" value="Americano" id="check12">
            <label class="layer" for="check12"></label>
          </div>
        </div>
      </div>
      <?php echo $opError; ?>
      <input type="submit" value="Continue" name="continue" class="continueBtn">
      </form>
      </div>
  </div>
  <div class="progressBar">
    <div class="progressStep ra2 done"><span class="fillBG"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>
