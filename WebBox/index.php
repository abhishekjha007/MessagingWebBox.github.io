<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Website Chatting </title>
</head>
<link rel="stylesheet" href="styles/style.css" type="text/css" media="all"/>
<body>
	<div id="Main">
		
		<div id="Info">
			<h1> * Please Login Here. </h1>

        <table>

			<form action="login.php" method="post">

				<label><b> Username : </b></label>
				<input type="text" name="username" placeholder="Enter Username" required><br><br>
				<label><b> Password : </b></label>
				<input type="text" name="password" placeholder="Enter Password" required><br><br>
				<button style="background-color: aqua; color: black;" type="submit"><b>LogIn</b></button>

			</form>

		</table>	

        <table>
			<form action="signup.php" method="post">

				<h1> * If you dont have an Account then please Sign Up below. </h1>

				<label><b> Username : </b></label>
				<input type="text" name="username" placeholder="Enter Username" required><br><br>
				<label><b> Email Id : </b></label>
				<input type="text" name="Email" placeholder="Enter your Email-Id" required><br><br>
				<label><b> Password : </b></label>
				<input type="text" name="Password" placeholder="Enter Password" required><br><br>
				<button style="background-color: aqua; color: black;" type="submit"><b>SignUp</b></button>

	        </form>
	    </table>    

		</div>
	</div>
</body>
</html>