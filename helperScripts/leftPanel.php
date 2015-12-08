<?PHP
/*
Name: leftPanel.php
Description: This is left panel that contains user statistics
				such as money, networth, rank, and tradeDeals left
Author: Paul A. Rodriguez Hernandez
*/

//needed to query the db
$user = $_SESSION["user"];

//prepared query statement
$query= "SELECT username, money, rank, trade_deals 
		FROM playerdata
		WHERE username = '$user'";
		
//executing the query on the database
$result = $mysqliConnection->query($query);
	
list($username, $money, $rank, $tradeDeals)= $result->fetch_row();

echo "
<div  id='leftpanel'>
			
			<br /><br />Welcome<br />				
			$username<br /><br />
			
			NetWorth:<br />
			<font color='green'>$$money</font><br /><br />
			
			Rank: <br />
			$rank <br /><br />
			
			Trade Deals Left<br /> 
			$tradeDeals<br /><br /> 
	
			
			<!-- This works as a log out button-->
			<form action='helperScripts/logout.php' >
				<button type='submit' id='buttonBlue'>Log Out</button>
			</form>
			
			<!-- New Line-->
			<br /><br />
			
			<!-- This works as a log out button-->
			<form action='./FAQ.php'>
				<button type='submit' id='buttonBlue'>FAQ</button>
			</form>
			
		</div>";
?>