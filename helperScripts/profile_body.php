<?PHP
/*
Name: profile_body.php
Description: This is the body of the profile page
Author: Paul A. Rodriguez Hernandez
*/



?>

<body>
	
	<div id='pagecontent'>

		<!--This includes the leftPanel navigation div-->
		<?PHP require 'helperScripts/leftPanel.php';?>

		<div id='gamecontent'>
		
			<img src='images/folder1-bk.png' class='background' />
		
			<!--This includes the pages navigation div-->
			<?PHP require 'helperScripts/navDiv.php';?>

<div id="gameControls">
					<table>
						<tr>
							<td class="tight"><div class="cellwidener">Rank</div></td>
							<td class="tight"><div class="cellwidener">Player</div></td>
							<td class="tight"><div class="cellwidener">Networth</div></td>
							<td class="tight"><div class="cellwidener">Money</div></td>
						</tr>
						
						
						<?PHP  
						
						include 'dbConn.php';
							//query for top players by networth
							$query = "SELECT users.username, playerdata.networth, playerdata.money FROM users LEFT OUTER JOIN playerdata ON users.username=playerdata.username ORDER BY playerdata.networth DESC LIMIT 5";

							$result = $mysqliConnection->query($query);
						
							$num =0;
							while(list($player, $networth, $money) = $result->fetch_row()) {
							
								echo "<tr>
									<td class='tight'><div class='cellwidener'>$num</div></td>
									<td class='tight'><div class='cellwidener'>$player</div></td>
									<td class='tight'><div class='cellwidener'>$networth</div></td>
									<td class='tight'><div class='cellwidener'>$money</div></td>
									</tr>";
							}
						?>
						
					</table>
				</div>

		</div>
	</div>
	
	<!--This includes the footer div-->
	<?PHP require 'helperScripts/footer.php';?>
	
</body>
