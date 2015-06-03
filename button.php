<html>
<?php
// $count=0;
$dbhost = "localhost";
	$dbuser = "root";
	$dbpass =  "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	 die('Could not connect: ' . mysql_error());
	}
//$sql="select count(*) from questions_html";
	mysql_select_db('quiz');
	//$count = mysql_query( $sql );
	$res=mysql_query("select * from questions_html");
	$count=mysql_num_rows($res);
 $qn=1;
//echo "$count";
while($qn<=$count){
echo "<input type=button value='$qn'>\t\t";
if($qn%5==0){
	echo "<br><br>";
}
$qn++;
// // <input type="button" value="3">
// // <input type="button" value="4">
// // <input type="button" value="5">
 }
?>
</html>