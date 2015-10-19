<?php 
include('../inc/config.php');
$opError = $check1 = $check2 = $check3 = $check4 = $setBuy = $setContinue = $setSpend = $setContinue = $setBuy = $erMsg1 = $erMsg2 = $erMsg3 = $erMsg4 = '';
$btnContinue= '<a href="rewards12.php" class="continueBtn">Continue</a>';
$btnBuy = '<input type="submit" class="buyNow" name="buynow" value="Buy Now">';
$active = 100;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['check1'])){$check1 = trim($_POST['check1']);if ($check1 =='wrong') {$hasError = true;$erMsg1=' error ';}}
		if (isset($_POST['check2'])){$check2 = trim($_POST['check2']);if ($check2 =='wrong') {$hasError = true;$erMsg2=' error ';}}
		if (isset($_POST['check3'])){$check3 = trim($_POST['check3']);if ($check3 =='wrong') {$hasError = true;$erMsg3=' error ';}}
		if (isset($_POST['check4'])){$check4 = trim($_POST['check4']);if ($check4 =='wrong') {$hasError = true;$erMsg4=' error ';}}
		if ($check1 =='') {$hasError = true;}
		if ($check2 =='') {$hasError = true;}
		if (!isset($hasError)) {
			$setContinue = $btnContinue;
			$active = 110;
			$setSpend = 5.10;
		} else {
			$opError = '<div class="message error">Incorrect selection</div>';
			$setBuy = $btnBuy;
		}
	} else {
		$setBuy = $btnBuy;
	}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock" id="buyNowSection">
<div class="variableInfo"><span class="active"></span><span></span><span></span>&nbsp;&nbsp;PART 1 of 3</div>
  <div class="container">
    <div class="question" id="question1">
      <?php if ($setContinue) { ?>
    	<p>In Rewards Program B, you can redeem 125 stars for any food or drink item on the menu.</p>
    <?php } else { ?>
    	<p>You go to Starbucks and purchase a Tall Latte for $2.85. Please click on your purchased item and select 'Buy Now' to collect your star. </p>
    <?php } ?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="cf">
          <div class="rewardsBStar">
            <ul>
              <?php for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
              <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <div class="rewardsProducts">
            <div class="productBlock <?php if (!empty($check1)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/prd17.jpg">
            <span class="prdName"><span>Grande Americano</span></span>
              <input class="icheck" type="checkbox" name="check1" value="right" id="check1" <?php if (!empty($check1)) { echo 'checked';}?>>
              <label class="layer" for="check1"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check2)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/prd18.jpg">
            <span class="prdName"><span>Tall Cappuccino</span></span>
              <input class="icheck" type="checkbox" name="check2" value="right" id="check2" <?php if (!empty($check2)) { echo 'checked';}?>>
              <label class="layer" for="check2"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check3)) { echo 'activeDiv';}?><?php echo $erMsg3; if ($setContinue) echo 'gray'; ?>"> <img src="<?php echo $siteurl; ?>images/temp.jpg">
            <span class="prdName"><span>Lorem Ipsum</span></span>
              <input class="icheck" type="checkbox" name="check3" value="wrong" id="check3" <?php if (!empty($check3)) { echo 'checked';}?>>
              <label class="layer" for="check3"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check4)) { echo 'activeDiv';}?><?php echo $erMsg4; if ($setContinue) echo 'gray'; ?>"> <img src="<?php echo $siteurl; ?>images/temp.jpg">
            <span class="prdName"><span>Lorem Ipsum</span></span>
              <input class="icheck" type="checkbox" name="check4" value="wrong" id="check4" <?php if (!empty($check4)) { echo 'checked';}?>>
              <label class="layer" for="check4"></label>
            </div>
            <?php echo $setBuy; ?>
            <?php if (!empty($setSpend)) { ?>
            <div class="totalSpend">Spend = $<?php echo $setSpend; ?></div>
            <?php } ?>
          </div>
        </div>
        <?php echo $opError; ?><?php echo $setContinue; ?>
      </form>
    </div>
  </div>
  <div class="progressBar">
  	
    <div class="progressStep ra2"><span class="fillBG" style="height:83.3%"></span></div>
    
  </div>
</section>
<?php include('../inc/footer.php'); ?>