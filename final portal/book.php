
<?php

session_start();
$temp = $_SESSION["success"];
$_SESSION["success"] = $temp;
//echo $_SESSION['success'];
if(!isset($_SESSION['success']))
{
	header('Location:timeout.html');
}

echo'

	<title>Book</title>
<a href="end.php" target="_blank" ><button type="button" class="btn btn-danger raised" style="float:right;font-size:10px;">Logout</button></a><br>
<form action="try1.php" method="POST">
Name of Book: <input type="text"  autofocus placeholder="Name of Book" required name="name"><br><br>

ISBN Number: <input type="text" placeholder="ISBN Numnber" required name="isbn"><br><br>

Publisher: <input type="text" placeholder="Publisher" required name="publisher"><br><br>
Year of Publishment: <input type="number" placeholder="Year of Publishment" required name="year"><br>';


// echo "Year of Publishment ";
// echo '<select >';
// for($i=1990;$i<=2015;$i++)
// echo '<option name='.$i.'value='.$i.' >'.$i.'</option>';
// echo '</select>';

//echo '<br>';
//echo'<input type="hidden" name="i"  value='.$i.'>' ;

echo '
<br>
Description: <input type="text-box" placeholder="Description" required name="bdescription"><br><br>

Co Authors(if any): <input type="text" placeholder="Co Authors(if any)" required name="bauthors"><input type="button" value="+" >
<br><br>

	
<input type="submit" name="submit" value="Submit" height="80" width = "150">


</form>';

?>


