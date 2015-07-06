<?php
session_start();
if(isset($_SESSION['success']))
{
include_once('./connect.php');

 $cname =$_POST['cname'];
 $cdate =$_POST['cdate'];
 $cdescription=$_POST['cdescription'];
 $venue = $_POST['venue'];
 $ctype = $_POST['ctype'];


$sql = "INSERT INTO conference (cname, cdate, cdescription, venue, ctype) VALUES ('$cname', '$cdate','$cdescription','$venue','$ctype')";

if(mysqli_query($con,$sql)) 
{ 
    
	echo'<h2>Conference Successfully Added<h2>';
	echo'<a href="conference.php"><p>Click to add a new Conference</p></a>';


}}
else
{
	header('Location:timeout.html');
}

?>