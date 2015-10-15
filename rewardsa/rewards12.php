<?php 
include('../inc/config.php');
$opError = $check1 = $check2 = $check3 = $check4 = $setBuy = $setContinue = $setSpend = $setContinue = $setBuy = '';
$btnContinue= '<a href="complete.php" class="continueBtn">Continue</a>';
$btnBuy = '<input type="submit" class="buyNow" name="buynow" value="Buy Now">';
$active = 11;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (isset($_POST['check1'])){$check1 = trim($_POST['check1']);if ($check1 =='wrong') $hasError = true;}
		if (isset($_POST['check2'])){$check2 = trim($_POST['check2']);if ($check2 =='wrong') $hasError = true;}
		if (isset($_POST['check3'])){$check3 = trim($_POST['check3']);if ($check3 =='wrong') $hasError = true;}
		if (isset($_POST['check4'])){$check4 = trim($_POST['check4']);if ($check4 =='wrong') $hasError = true;}
		if ($check1 =='') {$hasError = true;}
		if ($check2 =='') {$hasError = true;}
		if (!isset($hasError)) {
			$setContinue = $btnContinue;
			$active = 12;
			$setSpend = 7.40;
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
      <p>You visit Starbucks and purchased a <strong>Grande Caramel Machiatto, Tall Skinny Latte</strong> and <strong>Tall Latte</strong> costing <strong>$10.45</strong>. Please click on the items that you purchased and then select ‘Buy Now’ to collect stars under this rewards program.</p>
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
            <div class="productBlock <?php if (!empty($check1)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/prd19.jpg">
            <span class="prdName"><span>Grande Skinny White Latte</span></span>
              <input class="icheck" type="checkbox" name="check1" value="right" id="check1" <?php if (!empty($check1)) { echo 'checked';}?>>
              <label class="layer" for="check1"></label>
            </div>
            <div class="productBlock  <?php if (!empty($check2)) { echo 'activeDiv';}?>"> <img src="<?php echo $siteurl; ?>images/prd20.jpg">
            <span class="prdName"><span>Grande Latte</span></span>
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
    <div class="progressStep ra1"><span class="fillBG" style="height:91.63%"></span></div>
    
  </div>
</section>
<?php include('../inc/footer.php'); ?>