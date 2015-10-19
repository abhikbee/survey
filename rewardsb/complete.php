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
      <p>You’ve collected 125 stars – the next one's us! Please select an item to redeem and click the 'Continue' button to answer some questions about Rewards Program B.</p>
      <form name="rewardAForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="cf">
        <div class="rewardsProducts">
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp1.jpg"><span class="prdName"><span>Blueberry Scone</span></span>
            <input class="icheck" type="radio" name="selected" value="Blueberry Scone" id="check1">
            <label class="layer" for="check1"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp2.jpg"><span class="prdName"><span>Buttered Croissant</span></span>
            <input class="icheck" type="radio" name="selected" value="Buttered Croissant" id="check2">
            <label class="layer" for="check2"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp3.jpg"><span class="prdName"><span>Chicken BLT Salad Sandwich</span></span>
            <input class="icheck" type="radio" name="selected" value="Chicken BLT Salad Sandwich" id="check3">
            <label class="layer" for="check3"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp4.jpg"><span class="prdName"><span>Chocolate Croissant</span></span>
            <input class="icheck" type="radio" name="selected" value="Chocolate Croissant" id="check4">
            <label class="layer" for="check4"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp5.jpg"><span class="prdName"><span>Grande Blond Roast Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Blond Roast Coffee" id="check5">
            <label class="layer" for="check5"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp6.jpg"><span class="prdName"><span>Grande Caramel Frappuccino</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Caramel Frappuccino" id="check6">
            <label class="layer" for="check6"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp7.jpg"><span class="prdName"><span>Grande Caramel Machhiato</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Caramel Machhiato" id="check7">
            <label class="layer" for="check7"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp8.jpg"><span class="prdName"><span>Grande Chai Tea Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Chai Tea Latte" id="check8">
            <label class="layer" for="check8"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp9.jpg"><span class="prdName"><span>Grande Iced Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Iced Coffee" id="check9">
            <label class="layer" for="check9"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp10.jpg"><span class="prdName"><span>Grande Iced Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Iced Latte" id="check10">
            <label class="layer" for="check10"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp11.jpg"><span class="prdName"><span>Grande Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Latte" id="check11">
            <label class="layer" for="check11"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp12.jpg"><span class="prdName"><span>Grande Mocha Frappuccino</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Mocha Frappuccino" id="check12">
            <label class="layer" for="check12"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp13.jpg"><span class="prdName"><span>Grande Mocha</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Mocha" id="check13">
            <label class="layer" for="check13"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp14.jpg"><span class="prdName"><span>Grande Pike Place Brewed Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Pike Place Brewed Coffee" id="check14">
            <label class="layer" for="check14"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp15.jpg"><span class="prdName"><span>Grande Pumpkin Spice Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Pumpkin Spice Latte" id="check15">
            <label class="layer" for="check15"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp16.jpg"><span class="prdName"><span>Grande Skinny Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande Skinny Latte" id="check16">
            <label class="layer" for="check16"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp17.jpg"><span class="prdName"><span>Grande White Mocha</span></span>
            <input class="icheck" type="radio" name="selected" value="Grande White Mocha" id="check17">
            <label class="layer" for="check17"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp18.jpg"><span class="prdName"><span>Ham and Swiss Panini</span></span>
            <input class="icheck" type="radio" name="selected" value="Ham and Swiss Panini" id="check18">
            <label class="layer" for="check18"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp19.jpg"><span class="prdName"><span>Morning Bun</span></span>
            <input class="icheck" type="radio" name="selected" value="Morning Bun" id="check19">
            <label class="layer" for="check19"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp20.jpg"><span class="prdName"><span>Tall Blonde Roast Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Tall Blonde Roast Coffee" id="check20">
            <label class="layer" for="check20"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp21.jpg"><span class="prdName"><span>Tall Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Tall Latte" id="check21">
            <label class="layer" for="check21"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp22.jpg"><span class="prdName"><span>Tall Pike Place Brewed Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Tall Pike Place Brewed Coffee" id="check22">
            <label class="layer" for="check22"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp23.jpg"><span class="prdName"><span>Tall Pumpkin Spice Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Tall Pumpkin Spice Latte" id="check23">
            <label class="layer" for="check23"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp24.jpg"><span class="prdName"><span>Venti Caramel Frappuccino</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti Caramel Frappuccino" id="check24">
            <label class="layer" for="check24"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp25.jpg"><span class="prdName"><span>Venti Chai Tea Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti Chai Tea Latte" id="check25">
            <label class="layer" for="check25"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp26.jpg"><span class="prdName"><span>Venti Dark Roast Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti Dark Roast Coffee" id="check26">
            <label class="layer" for="check26"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp27.jpg"><span class="prdName"><span>Venti Iced Coffee</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti Iced Coffee" id="check27">
            <label class="layer" for="check27"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp28.jpg"><span class="prdName"><span>Venti Iced Green Tea</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti Iced Green Tea" id="check28">
            <label class="layer" for="check28"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp29.jpg"><span class="prdName"><span>Venti Pumpkin Spice Latte</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti Pumpkin Spice Latte" id="check29">
            <label class="layer" for="check29"></label>
          </div>
          <div class="productBlock"><img src="<?php echo $siteurl; ?>images/rp30.jpg"><span class="prdName"><span>Venti White Mocha</span></span>
            <input class="icheck" type="radio" name="selected" value="Venti White Mocha" id="check30">
            <label class="layer" for="check30"></label>
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
