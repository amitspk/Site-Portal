<?php
session_start();
$temp = $_SESSION["success"];
$_SESSION["success"] = $temp;
//echo $_SESSION['success'];
if(!isset($_SESSION['success']))
{
	header('Location:timeout.html');
}
?>
<html>
<head>
<title>Journal</title>
</head>
<body>

<a href="end.php" target="_blank" ><button type="button" class="btn btn-danger raised" style="float:right;font-size:10px;">Logout</button></a><br>
<form action="try.php" method="POST" >
Name of Paper: <input  type="text"  autofocus placeholder="Name of paper" required name="papername" ><br><br>

Journal Name: <input  type="text"  placeholder="Journal Name"  required  name="jname"><br><br>

Date of Publishing: <input  type="date"  placeholder="Date of publishing" required name="date"> <br><br>

<input type="radio" name="journal-type" value="national" checked >National <br> <input type="radio" name="journal-type" value="international"  >International journal<br><br>

Abstract Description: <textarea name="description" height="90" width="170" placeholder="Abstract Description" required ></textarea><br><br>


Co Authors(if any): <input type="text" placeholder="Co Authors(if any)" name="coauthors" required><input type="button" value="+" >
<br><br>

<input type="submit" name="submit" value="Submit" height="80" width = "150">


</form>




</body>
</html>
