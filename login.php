<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "quiz";
$username=$_POST["email"];
$password1=$_POST["Password"];
// Create connection
$conn = mysql_connect("localhost","root","");
// Check connection
mysql_select_db($dbname);
$sql=mysql_query("SELECT password FROM register WHERE email='$username'");
//echo "$password1";
$row=mysql_fetch_assoc($sql);
//echo "-->".$row['password']."-->";
if($password1==$row['password']){
header('Location: see.php');
echo "Successfully logged in";
$eff=mysql_query('INSERT INTO login(email,password) VALUES("'. $username .'","'. $password1 .'")');
}
else{
echo "wrong credentials";
}
mysql_close($conn);
?>

