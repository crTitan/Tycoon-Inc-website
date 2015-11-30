<?PHP
	//output the beginning of the html file
	require 'helperScripts/XHTMLOpeningTags.php';

	//includes the header section of the XHTML file
	require 'helperScripts/header.php';
	
?>
	<body>

	<p>You account has been successfully created!<br />
	 You will be redirected to the login page shortly...</p>

	</body>
</html>

<!--This function redirects the user to the login page -->
<?PHP header('Refresh: 5; URL=login'); ?>

