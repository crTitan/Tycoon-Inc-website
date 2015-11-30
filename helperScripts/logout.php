<?PHP
/*
Name: logout.php
Description: This unsets all the session variable
				and redirects the user to the login page
Author: Paul A. Rodriguez Hernandez
*/

session_start();
$_SESSION["LoggedIn"] = false;
session_unset();
header("Location:../login");
exit;
?>