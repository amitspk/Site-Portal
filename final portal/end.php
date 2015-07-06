<?php
session_start();
if(!isset($_SESSION['success']))
{
	echo"	
<html>
<head>
</head>
<body>
<center style='font-size:30px;color:blue;margin-top:270px;weight:bold;'>
		You have been logged out.You must Login again.
	</center>
	</body>
</html>
";
}
else
{
	echo"	
<html>
<head>
</head>
<body>
<center style='font-size:30px;color:green;margin-top:270px;weight:bold;'>
		You Have Been Successfully Logged Out
	</center>
	</body>
</html>
";
}
//$temp = $_SESSION["success"];

//$_SESSION["success"] = $temp;

session_destroy();


?>