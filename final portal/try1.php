<?php
session_start();
if(isset($_SESSION['success']))
{
 require_once('./connect.php');



  $name = $_POST["name"];
  $isbn = $_POST['isbn'];
  $publisher= $_POST['publisher'];
   $year = $_POST['year'];
  $bdescription=$_POST['bdescription'];
  $bauthors = $_POST['bauthors'];
 //echo $submit = $_POST['Submit'];
 
$sql = "INSERT INTO books (name, isbn, publisher, year, bdescription, bauthors) VALUES ('$name', '$isbn', '$publisher', '$year', '$bdescription', '$bauthors')";

if(mysqli_query($con,$sql))

{
	echo"<h2>Book Successfully Added.<h2>";
	echo'<a href="book.php"><p>Click to add a new Book</p></a>';

}

else
	echo mysql_errno();
}
else
{
	header('Location:timeout.html');
}

?>
