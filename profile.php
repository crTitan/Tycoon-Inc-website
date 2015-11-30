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

//prepared query statement
$query= "SELECT user, money, rank, tradedeals 
		FROM playerdata
		WHERE user = '$user'";
		
//executing the query on the database
$result = $mysqliConnection->query($query);
	
list($username, $money, $rank, $tradeDeals)= $result->fetch_row();

require 'helperScripts/XHTMLOpeningTags.php';

require 'helperScripts/header.php';

require 'helperScripts/profile_body.php';

echo "</html>";
?>