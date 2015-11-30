<?PHP
	//start the sessions for sessions variables
	session_start();

	/*if the log in session variable is has a value of false,
	it send the user back to the log in page*/
	if($_SESSION["LoggedIn"] == false){
		header("Location:login");
		exit;
	}
?>
