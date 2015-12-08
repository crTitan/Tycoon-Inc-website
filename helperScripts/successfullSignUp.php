<?PHP
	//output the beginning of the html file
	require 'XHTMLOpeningTags.php';

	//includes the header section of the XHTML file
	require 'header.php';
	
?>

<!--puases so the user has time to read the screen then redirects them to the login page-->
<?PHP header('Refresh: 5; URL=../login'); ?>
	<body>

	<p>You account has been successfully created!<br />
	 You will be redirected to the login page shortly...</p>

	</body>
</html>

