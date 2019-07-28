<?php           // Establishing Connection with our Database.

$con = mysqli_connect("localhost:3308","root","12345","webchat");             

if(!$con)
{
	die("connection failed" .mysqli_connect_error());
}

?>