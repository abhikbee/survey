<?php include('../inc/config.php'); ?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock">
<div class="variableInfo"><span class="active"></span><span class="active"></span><span></span>&nbsp;&nbsp;PART 2 of 3</div>
  <div class="container choiceStarFull">
    <div class="rewardsAStar">
        <ul>
          <?php $active = 12; for ($cnt = 1; $cnt <= 12; $cnt++) { ?>
          <li class="star1 <?php if ($cnt <= $active) {echo "active";} ?>"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
          <?php } ?>
        </ul>
      </div>
    <p>As a member of Rewards Program A, you can get redeem 12 stars for a free food or drink item.</p>
    <a href="<?php echo $siteurl; ?>choice/index.php" class="continueBtn">Continue</a> </div>
</section>
<?php include('../inc/footer.php'); ?>