<?php

	session_start();
	require_once('new-connection.php');


	$email = $_POST['email'];

	$errors = array();



	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		  $_SESSION['error'][]="$email is not a valid email address."; 
		  header("Location: email-validation-index.php");  
	} 

	if(empty($email)){
	   $_SESSION['error'][]= "Email cannot be empty";
	   
	}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	   // $_SESSION['error'][]= "You are now logged on.";
		$query = "INSERT INTO emails (email, created_at, updated_at)
          VALUES('{$_POST['email']}', NOW(), NOW())";
          run_mysql_query($query);
          header ('location:email-success.php');
		}
	


?>