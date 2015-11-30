<?PHP
/*
Name: leftPanel.php
Description: This is left panel that contains user statistics
				such as money, networth, rank, and tradeDeals left
Author: Paul A. Rodriguez Hernandez
*/
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