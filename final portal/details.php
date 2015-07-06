<?php
session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["dob"]=$_POST['dob'];
$_SESSION["email"]=$_POST['email'];
$dob1=explode("-",$_SESSION['dob']);
$_SESSION['dob']=$dob1[0]."-".$dob1[1]."-".$dob1[2];
$name1 = $_SESSION['name'];
$dob2 = $_SESSION['dob'];
$email1 = $_SESSION['email'];
$con=mysqli_connect("localhost","root","","site") or die("could not connect");
$sql=mysqli_query($con,"Select * from fac WHERE name = '$name1' AND dob = '$dob2' AND email = '$email1'");
if($row=mysqli_fetch_array($sql))
{
		header('Location:aa.php');
	$_SESSION["success"]=1;
}
else
header('Location:index.html');
?>