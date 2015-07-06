<?php

$host="localhost";
$user="root";
$pass='';
$dbn= "site";
$con = mysqli_connect($host, $user, $pass, $dbn);
if(!$con )
{
	echo"Connection Error:".mysqli_connect_error();
}




?>