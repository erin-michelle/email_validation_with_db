<?php 
	
	session_start();
	require_once('new-connection.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Email Validation with Database</title>
	<meta charset="utf-8">
	<style>
		h3 {
			font-family: futura;
		}

		form {
			font-family: futura;
		}

		input {
			font-family: futura;
			margin:10px 5px 20px, 0px;
		}

		.button {
	
			border: 1px solid black;
			border-radius: 3px;
			background-color: pink;
			font-family: futura;

		}
	</style>
</head>
<body>


	<h3>Email Addresses Entered:</h3>
	<form action="email-valid-process.php" method="post">
		<input type="text" name="email" placeholder="Email Address">
		<input type="submit" class='button'>
	</form>
	<?php

			 $_SESSION = array();

	if(isset($_SESSION['error'])) {
		foreach ($_SESSION['error'] as $error) {
			echo $error;
		}
	}	
	?>

</body>
</html>