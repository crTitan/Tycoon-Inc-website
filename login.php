<?php
/*
Script: login.php
Description: This scripts logs the user in to the website.
Author: Paul A. Rodriguez Hernandez  
*/
	/*Checks to see if there is a user and pass entered before starting the session*/
	if (isset($_POST['password']) && isset($_POST['username'])) {
		
		//connects to the database
		require_once 'helperScripts/dbConn.php';	
	
		//sets the POST variable values to the PHP counterparts
		$user= $_POST['username'];
		$pass= $_POST['password'];

		//checks to see if the user entered a value for username and password
		if($user && $pass){
					
			$query= "SELECT username, password 
					FROM users
					WHERE (username = '$user' AND password = '$pass')";
					
			$result = $mysqliConnection->query($query);
			
			//checks to see if the query returned any rows
			if($result->num_rows > 0){
				session_start();
				$_SESSION["LoggedIn"] = true;
				$_SESSION["user"] = $user;
				header("Location:profile");
				exit; 	
			}
			else{
				$errMsg = "<p><font color='red'>Invalid username/password</font></p>";
			}
		}
		else {
			$errMsg = "<p><font color='red'>Please enter a username and password</font></p>";
		}
	}
	else{
		$errMsg = null;
	}
	
//includes the opening tags for the XHTML document
require 'helperScripts/XHTMLOpeningTags.php';

//includes the <head> section of the XHTML document
require 'helperScripts/header.php';
?>
	<body>
		
		<div id='loginPageContentContainer'>
			
			<div id='loginPanel'>			
				<form action='login' method='POST' align = 'center'><br />
					Username: <input type='text' name='username'><br /><br />
					Password: <input type='password' name='password'><br /><br />
					<input type='submit' value='Log In' /> 
				</form>	
				
				<!--Outputs the error if the error is not null-->
				<?PHP echo "$errMsg"; ?>
				
				<p>Need an account?<br />
				<a id='signUpLink' href='register'>Sign Up</a></p>
			</div>	

			<div id='gamecontent'>
				<img src='images/tycoon-blackbacktransp.png'/>
			</div>
				
		</div>

	</body>
</html> 
