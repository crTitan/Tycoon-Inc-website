 <?PHP
/*
Name: profile.php
Description: This the profile page of the website.
				It containts information related 
				to the user that is currently 
				logged in
Author: Paul A. Rodriguez Hernandez
*/

//checks to make sure that you are logged in
require 'helperScripts/isLoggedIn.php';

//connects to the database
require_once'helperScripts/dbConn.php';

//needed to query the db
$user = $_SESSION["user"];

require 'helperScripts/XHTMLOpeningTags.php';

require 'helperScripts/header.php';

require 'helperScripts/profile_body.php';

echo "</html>";
?>