<?PHP
require_once'dbConnVars.php';
$mysqliConnection = new mysqli($hn, $un, $pass, $db) or die("Could not connect");
?>