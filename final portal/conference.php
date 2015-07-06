<?php

session_start();
$temp = $_SESSION["success"];
$_SESSION["success"] = $temp;
//echo $_SESSION['success'];
if(!isset($_SESSION['success']))
{
	header('Location:timeout.html');
}
echo'	<title>Conference</title>
<a href="end.php" target="_blank" ><button type="button" class="btn btn-danger raised" style="float:right;font-size:10px;">Logout</button></a><br>
<form action="try2.php" method="POST">
Name of Conference: <input type="text"  autofocus placeholder="Name of Conference" required name="cname"><br><br>

Held-on-Date: <input type="date" placeholder="Held-on-Date" required name="cdate"><br><br>

Description: <input type="text-box" placeholder="Description" required  name="cdescription"><br><br>

Venue: <input type="text" placeholder="Venue" required name="venue"><br><br>


<input type="radio" name="ctype" checked value="national">National <br> <input type="radio" name="ctype" value="international">International Conference<br><br>



<input type="submit" value="Submit" name="submit" height="80" width = "150">

	
</form> ' ;





?>

