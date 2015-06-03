<?php
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
	echo "<br>".$_SESSION[subject]."<br>";
	$res=mysql_query("select * from $_SESSION[subject]");
	$res1=mysql_num_rows($res);
	//echo "<br>count".$cn["count(*)"]."<br>";
	$quesno=1;
			$result=0;
			while($quesno<=$res1){
				$correct=mysql_query("select CorrectAnswer from $_SESSION[subject] where qn=$quesno");
				$crtans=mysql_fetch_assoc($correct);
				$correct1=mysql_query("select userans from $_SESSION[subject] where qn=$quesno");
				$crtans1=mysql_fetch_assoc($correct1);
				//echo "<br> user".$crtans1['userans']." crct ".$crtans['CorrectAnswer']." <br> ";
				if($crtans['CorrectAnswer']==$crtans1['userans']){
					$result++;
				}
				$quesno++;
			}
			echo "Your score:". $result."..";
			mysql_query("update $_SESSION[subject] set visited='null'");
			mysql_query("delete from login");
	
	?>