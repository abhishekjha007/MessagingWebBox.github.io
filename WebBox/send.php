<?php

session_start();

include 'db.php';

$message = $_POST['message'];
$name = $_SESSION['name'];

$q = "insert into post(msg,name) values('$message','$name')";
$result = $con->query($q);

header("Location:home.php");

?>