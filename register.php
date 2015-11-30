<?PHP
/*
Script: Register.php
Description: This script checks the database to see if the username and email provided by 
				the user are already found in the database. If found, there will be a message
				displayed to the user informing them accordingly.
				The script will redirect the user back tot he registration page if either check fails.
Author: Paul A. Rodriguez Hernandez
*/
	//needed for session variables
	session_start();
		


	/*Checks to see if the variables have been set*/
	if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['passcode'])) {
			
		//set all the variables from the form
		$user = $_POST['user'];
		$email = $_POST['email'];
		$passcode = $_POST['passcode'];
	
		if($user && $passcode && $email){	
			
			//connects to the database
			require_once 'helperScripts/dbConn.php';

			//prepared query statement to query for the username
			$query = "SELECT username
					FROM users
					WHERE username = '$user'";
				
			//queries the db
			$result = $mysqliConnection->query($query);
						
			/*if the query results is greater than 0
				then this user name is already in the database.
			*/
			if($result->num_rows > 0){
				$_SESSION["errLog"] = "This user name is already taken";
				header("Location:register");
				exit; 
			}
			
			//prepared statement to query for the email
			$query = "SELECT username
					FROM users
					WHERE email = '$email'";
				
			//queries the db
			$result = $mysqliConnection->query($query);
				
			/*if the query results is greater than 0
				then this email is already in the database.
			*/
			if($result->num_rows > 0){
				$_SESSION["errLog"] = "There is an account already associated with this email";
				header("Location:register");
				exit; 
			}

			/*only executes if both tests fail.
			meaning that neither the user name nor the email
			are already found in the database*/
			$query = "INSERT INTO `users`(`id`, `username`, `password`, `email`) VALUES ('', '$user','$passcode','$email')";
			
			//queries the db
			$result = $mysqliConnection->query($query);
			
			/*re-query the db to make sure that the information was added successfully*/
			//prepare statement to query for the email,
			$query = "SELECT username
					FROM users
					WHERE email = '$email'";
					
			//queries the db
			$result = $mysqliConnection->query($query);
					
			/* this lets the user know that their account has been created*/
			if($result->num_rows > 0){
				unset($_SESSION['errLog']);
				$_SESSION['username'] = $user;
				require 'helperScripts/setDefaultPlayerdata.php';
				header("Location:success");
				exit;	
			}
		}else {$msg = "<font color='red'><b>All fields are required</b></font>";}
	}	
	else{
		$msg = null;
		if(isset($_SESSION["errLog"]))
			$msg = $_SESSION["errLog"];
	}
	
	//output the beginning of the html file
	require 'helperScripts/XHTMLOpeningTags.php';

	//includes the header section of the XHTML file
	require 'helperScripts/header.php';
	
?>
		<body>
			<h2 align='center'>Sign Up</h2>

			<div id='registrationCSS'>
								
				<p><?PHP echo "$msg"; ?></p>
						
				<form action = 'register' METHOD = 'POST'>
					UserName: <br> <input type='text' name='user'><br /><br />
					Password:<br> <input type='password' name='passcode'><br /><br />
					Email:<br> <input type='text' name='email'><br /><br />
					<input type='submit' value='Sign Up' />
				</form>
						
				<!-- This adds a new line-->
				<br /><br />
		
			<!-- This works as a log out button-->
				<form action='login' align='center'>
					<button type='submit' id='buttonBlue'>Return to Login</button>
				</form>
			</div>
					
		</body>
	</html>
