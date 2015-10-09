<?php 
	$email = '';
	if(!empty($_GET["email"])) $email = $_GET["email"];
?>
<!doctype html>
<html>
<head>
<title>Online IAT</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic|Crete+Round:400,400italic' rel='stylesheet' type='text/css'>
<link type="text/css" href="core/css/overcast/jquery-ui-1.8.18.custom.css" rel="stylesheet">
<link type="text/css" href="core/css/iat.css" rel="stylesheet">
<script type="text/javascript" src="core/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="core/js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="core/js/IAT.js"></script>
<script type="text/javascript">initialize();</script>
</head>
<body>
<div id="instructions"> Javascript must be enabled for the application to run.<br>
  <br>
  Please enable javascript to continue.<br>
  <br>
</div>
<div class="getEmail">
  <div class="container">
    <?php  if(!empty($email)) { ?>
    <input type="hidden" id="subID" name="subID" value="<?php echo $email ?>">
    <?php } else { ?>
    <div class="emailForm">
        <input class="inputBox" type="text" id="subID" name="subID" value="<?php echo $email ?>" placeholder="Enter your email Address">
    </div>
    <?php } ?>
    <input class="button" type="submit" value="I am ready to begin" onclick="loadInstructions('IAT');">
  </div>
</div>
</body>
