<?php
session_start();
$temp = $_SESSION["success"];
$_SESSION["success"] = $temp;
if(!isset($_SESSION['success']))
{
	header('Location:timeout.html');
}

?>


<html>
	<head>
		
		
		<title></title>
		<meta name="description" content="">
		
				<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
				<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		
		<link href="includes/css/styles.css" rel="stylesheet">
		<link href="includes/css/buttons.css" rel="stylesheet">
		
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
	
<a href="end.php" target="_blank" ><button type="button" class="btn btn-danger raised" style="float:right;font-size:10px;">Logout</button></a><br>
	<div style="margin-top:200px">
	
	<center>
	<a href="journal.php" target="_blank" ><button type="button" class="btn btn-warning raised" id="asd">Journal</button></a><br>
	<a href="book.php" target="_blank" ><button type="button" class="btn btn-warning raised" id="asd">Book</button></a><br>
	<a href="conference.php" target="_blank"><button type="button" class="btn btn-warning raised" id="asd">Conferences</button></a><br>
	</center>
	</div>
	
		
	
	<script src="http://code.jquery.com/jquery.js"></script>
	
	
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	
	<script src="includes/js/script.js"></script>
	
	</body>
</html>

