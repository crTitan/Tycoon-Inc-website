<?PHP

//checks to make sure that you are logged in
require 'helperScripts/isLoggedIn.php';

//connects to the database
require_once 'helperScripts/dbConn.php';

//needed to query the db
$user = $_SESSION["user"];

require 'helperScripts/XHTMLOpeningTags.php';

require 'helperScripts/header.php';
?>
	<body>
		
		<div id="pagecontent">
			
			<?PHP require 'helperScripts/leftPanel.php'; ?>
				
			<div id="gamecontent">
			
				<img src="images/folder2-bk.png" class="background"/>

				<?PHP require 'helperScripts/navDiv.php';?>

				<div id="gameControls">
					<table>
						<tr>
							<td class="tight"><div class="cellwidener">Item</div></td>
							<td class="tight"><div class="cellwidener">Quantity</div></td>
							<td class="tight"><div class="cellwidener">Networth</div></td>
							<td class="tight"><div class="cellwidener">Price</div></td>
						</tr>
						<tr>
							<td class="tight"><div class="cellwidener">Air Force One</div></td>
							<td class="tight"><div class="cellwidener">100</div></td>
							<td class="tight"><div class="cellwidener">1500</div></td>
							<td class="tight"><div class="cellwidener">1,000,000</div></td>
						</tr>
					</table>
				</div>
			
			</div><!-- game content div-->
		
		</div><!-- page content div-->

	</body>
</html>