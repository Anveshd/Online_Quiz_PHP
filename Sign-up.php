<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "quiz";
header('Location: login.html');  
$firstname=$_POST["fullname"];
$lastname=$_POST["lastname"];
$mail=$_POST["email"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$phoneNo=$_POST["phone"];
$password=$_POST["password"];
$img=$_POST["img"];

// Create connection
$conn = mysql_connect("localhost","root","");
// Check connection
mysql_select_db($dbname);

$sql = 'INSERT INTO register (fullname, lastname,email,gender, dob, phone, password,img)
VALUES ("'. $firstname .'", "'. $lastname .'", "'. $mail .'",  "'. $gender .'","'. $dob .'", "'. $phoneNo .'", "'. $password .'","'. $img .'")';

$numberOfRowsAffected = mysql_query( $sql, $conn );
if($numberOfRowsAffected==0) {
	die("Problem in inserting values into the db...");
}
mysql_close($conn);

?> 