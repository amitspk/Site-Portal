<?php
session_start();
if(isset($_SESSION['success']))
{include_once('./connect.php');


 $papername = $_POST['papername'];
 $jname = $_POST['jname'];
 $date =$_POST['date'];
 $jtype = $_POST['journal-type'];
 $description = $_POST['description'];
 $coauthors = $_POST['coauthors'];
 

$sql = "INSERT INTO journal (papername, jname, date, jtype, description, coauthors) VALUES ('$papername', '$jname', '$date', '$jtype', '$description', '$coauthors')";

if(mysqli_query($con,$sql))

{
	echo"<h2>Journal Successfully Added<h2>";
	echo'<a href="journal.php"><p>Click to add a new journal</p></a>';

}
}
else
{
	
	header('Location:timeout.html');
}

?>