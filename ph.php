<?php
session_start();
$con = mysql_connect("localhost","root","credikr6","Etp0%k30") or die (mysql_error());
// Select the database to use
mysql_select_db("logina",$con);

  // Grab User submitted information
$email = ($_POST["users_email"]);
$pass =  ($_POST["users_pass"]);


$_SESSION['user'] = $email;

$sql="SELECT * FROM users WHERE users_email='$email' and users_pass='$pass'";

$result=mysql_query( "SELECT * FROM users WHERE users_email='$email' and users_pass='$pass' " , $con);

  // Grab User submitted information
//$email = ($_POST["users_email"]);
//$pass =  ($_POST["users_pass"]);

//$row=mysqli_fetch_array($result);
//$active=$row['active'];
$count = mysql_num_rows($result) ;


if($count==1)
{	
header("location: logged.php");
$_SESSION['login_status'] = 'true' ;
exit;
}
else
{
echo "Your Login Name or Password is invalid";
}

//mysqli_close($con); 
?>

