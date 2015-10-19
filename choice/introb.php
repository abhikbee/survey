<?php include('../inc/config.php'); ?>
<?php include('../inc/header.php'); ?>
<section class="slideBlock">
<div class="variableInfo"><span class="active"></span><span class="active"></span><span></span>&nbsp;&nbsp;PART 2 of 3</div>
  <div class="container choiceStarFull choiceStarFull2">
    <div class="rewardsAStar">
        <ul>
          <?php for ($cnt = 1; $cnt <= 125; $cnt++) { ?>
          <li class="star1 active"><img src="<?php echo $siteurl; ?>images/star.png" alt="star"></li>
          <?php } ?>
        </ul>
      </div>
    <p>As a member of Rewards Program B, you can get redeem 125 stars for a free food or drink item.</p>
    <a href="<?php echo $siteurl; ?>choice/question11.php" class="continueBtn">Continue</a> </div>
</section>
<?php include('../inc/footer.php'); ?>