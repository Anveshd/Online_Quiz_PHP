
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<?php
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass =  "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	 die('Could not connect: ' . mysql_error());
	}
	mysql_query("update $_SESSION[subject] set userans='no'");
echo "<form name=myform method=post action=online.php>";
echo "<input class='button' type=submit name=qnue value='start'></form>";
?>
</html>
