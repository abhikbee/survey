<?php 
include('../inc/config.php');
$opError = $check1 = $check2 = $check3 = $check4 = $setBuy = $setContinue = $setSpend = $setBtn = '';
$btnContinue= '<a href="rewards4.php" class="continueBtn">Continue</a>';
$btnBuy = '<input type="submit" class="buyNow" name="buynow" value="Buy Now">';
$active = 2;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['check1'])){$check1 = trim($_POST['check1']);if ($check1 =='wrong') $hasError = true;}
		if (isset($_POST['check2'])){$check2 = trim($_POST['check2']);if ($check2 =='wrong') $hasError = true;}
		if (isset($_POST['check3'])){$check3 = trim($_POST['check3']);if ($check3 =='wrong') $hasError = true;}
		if (isset($_POST['check4'])){$check4 = trim($_POST['check4']);if ($check4 =='wrong') $hasError = true;}
		if ($check1 =='') {$hasError = true;}
		if ($check2 =='') {$hasError = true;}
		if (!isset($hasError)) {
			$setBtn = $btnContinue;
			$active = 3;
			$setSpend = 21.50;
		} else {
			$opError = '<div class="message error">Incorrect select</div>';
			$setBtn = $btnBuy;
		}
	} else {
		$setBtn = $btnBuy;
	}
?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock" id="buyNowSection">
  <div class="container">
    <div class="question" id="question1">
      <p>You visit Starbucks and purchased a Venti Chai Tea Latte, Grande Mocha costing $8.20. As a member of Starbucks Rewards A, you can get any food or drink item free with 12 stars. Please click on the items that you purchased to collect stars under Rewards A.</p>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="cf">
          <div class="rewardsAStar">
            <ul>
              <?php for ($cnt = 1; $cnt <= 12; $cnt++) { ?>
              <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
              <?php } ?>
            </ul>
          </div>
          <div class="rewardsProducts">
            <div class="productBlock <?php if (!empty($check1)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/prd5.jpg">
            <span class="prdName"><span>Venti Chai Tea Latte</span></span>
              <input class="icheck" type="checkbox" name="check1" value="right" id="check1" <?php if (!empty($check1)) { echo 'checked';}?>>
              <label class="layer" for="check1"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check2)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/prd6.jpg">
            <span class="prdName"><span>Grande Mocha</span></span>
              <input class="icheck" type="checkbox" name="check2" value="right" id="check2" <?php if (!empty($check2)) { echo 'checked';}?>>
              <label class="layer" for="check2"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check3)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/temp.jpg">
            <span class="prdName"><span>Lorem Ipsum</span></span>
              <input class="icheck" type="checkbox" name="check3" value="wrong" id="check3" <?php if (!empty($check3)) { echo 'checked';}?>>
              <label class="layer" for="check3"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check4)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/temp.jpg">
            <span class="prdName"><span>Lorem Ipsum</span></span>
              <input class="icheck" type="checkbox" name="check4" value="wrong" id="check4" <?php if (!empty($check4)) { echo 'checked';}?>>
              <label class="layer" for="check4"></label>
            </div>
            <?php if (!empty($setSpend)) { ?>
            <div class="totalSpend">Spend = $<?php echo $setSpend; ?></div>
            <?php } ?>
          </div>
        </div>
        <?php echo $opError; ?><?php echo $setBtn; ?>
      </form>
    </div>
  </div>
  <div class="progressBar">
    <div class="progressStep ra1"><span class="fillBG" style="height:16.66%"></span></div>
    <div class="progressStep ra2"><span class="fillBG"></span></div>
    <div class="progressStep ra3"><span class="fillBG"></span></div>
    <div class="progressStep ra4"><span class="fillBG"></span></div>
    <div class="progressStep ra5"><span class="fillBG"></span></div>
  </div>
</section>
<?php include('../inc/footer.php'); ?>