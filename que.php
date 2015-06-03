<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
 die('Could not connect: ' . mysql_error());
}
$sql = 'SELECT * FROM questions';

mysql_select_db('quiz');
$retval = mysql_query( $sql );
$r=mysql_num_rows($retval);
while($r>0)
{
$row=mysql_fetch_assoc($retval);
   echo "Question: ".$row['question_no']."<br>  ".$row['OptionA']."   ".$row['OptionB']."   ".$row['OptionC']."  ".$row['OptionD']."<br>    Correct Answer: ".$row['CorrectAnswer']."<br><br>";
   $r--;
} 
echo "Fetched data successfully\n";
?>