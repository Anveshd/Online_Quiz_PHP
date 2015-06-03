<html>
<form name="myForm" action="online.php" method="post" >
<?php
//header('Location:online.php');
// Start the session

session_start();
$_SESSION[subject]="questions_html";
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
header('Location:exam.html');
$_SESSION["que"] = 1;
$_SESSION["preque"]=0;
$_SESSION["result"]=0;
echo "Welcome to Online Quiz";
?>
</body>
</html>