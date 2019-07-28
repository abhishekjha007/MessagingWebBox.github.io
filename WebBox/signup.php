<?php

include 'db.php';    // Establishing Connection with our Database.

 $username  =  $_POST['username'];
 $email     =  $_POST['Email'];
 $password  =  $_POST['Password'];

 $q = "insert into signup(username,email,password) values('$username','$email','$password')";
 $result = $con->query($q);

header("Location:index.php");

?>