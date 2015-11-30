<?PHP

//checks to make sure that you are logged in
require 'helperScripts/isLoggedIn.php';

//connects to the database
require_once 'helperScripts/dbConn.php';

//needed to query the db
$user = $_SESSION["user"];

$query= "SELECT user, money, rank, tradedeals 
		FROM playerdata
		WHERE user = '$user'";
		
$result = $mysqliConnection->query($query);
	
list($username, $money, $rank, $tradeDeals)= $result->fetch_row();

require 'helperScripts/XHTMLOpeningTags.php';

require 'helperScripts/header.php';
?>
	<body>
		
		<div id="pagecontent">
			
			<?PHP require 'helperScripts/leftPanel.php'; ?>
				
			<div id="gamecontent">
			
				<img src="images/folder2-bk.png" class="background"/>
				
				<?PHP require 'helperScripts/navDiv.php';?>
			
			</div>
		
		</div>

	</body>
</html>