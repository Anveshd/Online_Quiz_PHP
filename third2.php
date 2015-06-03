<html>
<head>
<span id="countdown" class="timer"></span>
<script>
var seconds = 30;
function secondPassed() {
    setTimeout(function(){
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = "Time:"+minutes + ":" + remainingSeconds;

    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "TIME  OUT";
        window.open("start3.html","_parent");
    } else {
        seconds--;
    }
    },5000);
}
 
var countdownTimer = setInterval('secondPassed()', 1000);
</script>

<br><br>
<img src="1.png" alt="Smiley face" width="150" height="120">
<br>
</head>

<body>
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
</body>
</html>