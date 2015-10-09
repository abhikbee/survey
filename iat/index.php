<?php 
	$email = '';
	if(!empty($_GET["email"])) $email = $_GET["email"];
?> 
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Strict//EN">
<html>
<head>
<title>Online IAT</title>	
<link type="text/css" href="core/css/overcast/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
<style type="text/css"> @import "core/css/iat.css";</style>	
<script type="text/javascript" src="core/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="core/js/jquery-ui-1.8.18.custom.min.js"></script>
<script type="text/javascript" src="core/js/IAT.js"></script>
<script type="text/javascript">
	initialize();
</script>
</head>
<body>
<?php  if(!empty($email)) { ?> 
<input type="hidden" id="subID" name="subID" value="<?php echo $email ?>">
<?php } else { ?> 
	<label for="subID">Enter your email Address</label><input type="text" id="subID" name="subID" value="<?php echo $email ?> ">
<?php } ?> 
<div id="instructions">
    Javascript must be enabled for the application to run.<br><br>
    Please enable javascript to continue.<br><br>
</div>

</body>