<!DOCTYPE>
<html>
<head>
<link href="quiz.css" rel="stylesheet" type="text/css">

</head>
<h1>
	Online Quiz
</h1>
<body>

 
	<?php
	session_start();
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass =  "";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('quiz');
	$res=mysql_query("select * from $_SESSION[subject]");
	$res1=mysql_num_rows($res);
	//$_SESSION[que]=$_POST['$qn'];
	if($_POST['qnue']=='submit your test' || $_POST['qnue']=='your results'){
			$quesno=1;
			$result=0;
			if($_SESSION["que"]>0){
				$ans=$_POST["ans"];
    		}
			$_SESSION["preque"]=$_SESSION["que"];
			mysql_query("update $_SESSION[subject] set userans='$ans' where qn=$_SESSION[preque]");
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
			mysql_query("update $_SESSION[subject] set userans='no'");
			mysql_query("delete from login");
		}
		else{
	//echo "'$_SESSION[que]'";
	if($_POST['qnue']!='next'){
		if($_POST['qnue']=='start your test'){
			$_SESSION["que"]=1;
			$_SESSION["preque"]=0;
		}
		
		else{
			$_SESSION["preque"]=$_SESSION["que"];
			$_SESSION["que"]=$_POST['qnue'];;
		}
	}
	else{
	 	$_SESSION["que"]++;
	}
	//echo "<br> button".$_SESSION["que"]." pre ".$_SESSION["preque"]."<br>";
	
		
	if($_SESSION["que"]>=1){
		$ans=$_POST["ans"];
    }
    $sql = "SELECT * FROM $_SESSION[subject] where qn='$_SESSION[que]'";
	$retval = mysql_query( $sql );
	$r=mysql_num_rows($retval);
	mysql_query("update $_SESSION[subject] set userans='$ans' where qn=$_SESSION[preque]");
	mysql_query("update $_SESSION[subject] set visited='true' where qn=$_SESSION[preque]");
	$count=mysql_query("select count(*) from $_SESSION[subject]");
	$cn=mysql_fetch_assoc($count);
		
	echo "<form name=myform method=post>";
	if($r!=0){
	 	$row=mysql_fetch_assoc($retval);
		echo $_SESSION["que"].".";
		
	 	echo $row['question']."<br>  ";//.$row['"']."   ".$row['OptionB']."   ".$row['OptionC']."  ".$row['OptionD']."<br>    Correct Answer: ".$row['CorrectAnswer']."<br><br>";
   		echo "<input type=radio name=ans value='A'>$row[OptionA]";
		echo "<br><input type=radio name=ans value='B'>$row[OptionB]";
		echo "<br><input type=radio name=ans value='C'>$row[OptionC]";
		echo "<br><input type=radio name=ans value='D'>$row[OptionD]<br><br>";
		$_SESSION["preque"]=$_SESSION["que"];
	 	// echo "<br>----------<br>";
	 	// echo "count".$cn["count(*)"].": ".$_SESSION["que"]." ";
	 	if($_SESSION["que"]<$cn["count(*)"]){
    		echo "<input type=submit onclick=online.php name=qnue value='next'>";
    	}
	
	
	echo "\t\t<input type=submit onclick=start3.html name=qnue value='submit your test'><br><br>";
	} 
// $count=0;
if($_POST['qnue']!='submit'){


	$res=mysql_query("select * from $_SESSION[subject]");
	$count=mysql_num_rows($res);
 $qn=1;
 $visit=mysql_query("select visited from $_SESSION[subject] where qn=$qn");
 $vis=mysql_fetch_assoc($visit);
 $visited=$vis["visited"];
 //echo "...<br>".$visited."<br>";
 echo "<form name=myform method=post>";
while($qn<=$count){
	$visit=mysql_query("select visited from $_SESSION[subject] where qn=$qn");
 $vis=mysql_fetch_assoc($visit);
 $visited=$vis["visited"];
 $user=mysql_query("select userans from $_SESSION[subject] where qn=$qn");
 $use=mysql_fetch_assoc($user);
 $userans=$use["userans"];
 //echo "<br> ans: ".$userans."<br>";
  if($visited=="true" && $userans!=null){
 	echo "<input type=submit style=background-color:lightgreen onclick=online.php name=qnue value='$qn'>\t\t";
 }
 else if($visited=="true"){
echo "<input type=submit style=background-color:orange onclick=online.php name=qnue value='$qn'>\t\t";
}
else{
	echo "<input type=submit style=background-color:lightblue onclick=online.php name=qnue value='$qn'>\t\t";
}
//$sai++;
if($qn%5==0){
	echo "<br>";
}
//$_SESSION[que]=$qn;
$qn++;

 }
}
}
?>
</form>		
</body>
</html>
