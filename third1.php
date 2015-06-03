<html>
<body>
<br><br>
<img src="1.png" alt="Smiley face" width="150" height="120">
<br>
</body>
</html>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
 die('Could not connect: ' . mysql_error());
}
mysql_select_db('quiz');
$sql =mysql_query( "SELECT email FROM login limit 1");
$row1=mysql_fetch_assoc($sql);
$mail=$row1['email'];
//echo "-->".$mail."..";
$sql1="SELECT * from register where email='$mail'";
$retval = mysql_query( $sql1 );

   $row=mysql_fetch_assoc($retval);
   echo "Fullname: ".$row['fullname']." <br> Lastname: ".$row['lastname']."<br> email id: ".$row['email']."<br>Gender: ".$row['gender']."<br> Date of birth: ".$row['dob']."<br> Phone no: ".$row['phone']."<br>";
   //echo '<img src="image: '.$row['img'].' "> ';
//echo "Fetched data successfully\n";
?>