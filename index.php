<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=win-1251" />
	<title>Test</title>
	
	<script type="text/javascript" src="js/jquery.js" ></script>
	<script type="text/javascript" src="js/comments.js"></script>
	
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body bgcolor="#ffffff">

<div style="width:600px;margin:0 auto;">
<?php
include_once("commentFunc.php");
include_once("commentAdd.php");
include_once("commentView.php");
include_once("commentForm.php");
?>
</div>

</body>
</html>