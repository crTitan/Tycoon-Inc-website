<?PHP
	//connects to the database
	require_once 'dbConn.php';
	
	session_start();
	
	$user = $_SESSION['username'];
	
	$query = "INSERT INTO `a7458194_Tycoon`.`playerdata` (`user`, `money`, `rank`, `TradeDeals`) VALUES ('$user', '500000', 'Businessman', '10');";
	
	//executes the query on the db
	$result = $mysqliConnection->query($query);

	//you could test to make sure that the data has been written to the db here 
?>