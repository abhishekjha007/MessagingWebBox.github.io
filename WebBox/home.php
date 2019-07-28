<?php
   
   session_start();
   include 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
</head>
<link rel="stylesheet" href="styles/home.css" type="text/css" media="all"/>
<body>
	
	<div id="A">
            <h1 style="background-color: lightblue; color: black;"><?php  echo $_SESSION['name']?>-online</h1>    

            <div class="output">
    
    <?php $q = "SELECT * FROM post ";
    $result = $con -> query($q);
        if($result->num_rows > 0) {
        	// Output data of each row
        	while($row = $result->fetch_assoc()) {

        		echo "" . $row["name"]. " " . "::- " . $row["msg"]." --: " .$row["date"]. "<br>"; 
        		echo "<br>";
        	}
        } else {
        	echo "0 results";
        }
        $con->close();
        ?>


            </div>

       <form action="send.php" method="post">
       	  <textarea name="message" placeholder="Please Type here to send the Message..." class="form-control"></textarea><br>
       	  <input type="submit" value="send" id="B">
       </form>
       <br>

          <form action="logout.php">
               <input style="width:20%; background-color: black; color: white; font-size: 30px;" type="submit" value="Logout" align="center">	
           
          </form>

	</div>
 </body>
</html>