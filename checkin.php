<?php

session_start();
if(isset($_SESSION['login_status']))
{

}
else
{
	header("location: login.html");
	exit;
}
$con = mysql_connect("localhost","root","credikr6","Etp0%k30") or die (mysql_error());
// Select the database to use
mysql_select_db("logina",$con);


if(isset($_SESSION['login_status']))
{
}
else
{
	header("location: login.html");
}
$user = $_SESSION['user'] ;

date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$time = date('H:i');
$_SESSION['times']=$time;
$time1 = date('Hi');

if( $time1 >= 945 && $time1 <= 1300)
{
	$sit = "Late Mark";
}
elseif($time1 >= 1300 && $time1 <= 1900)
{
	$sit = "Half Day";
}
else{
	$sit = "correct";
}
$sql= "INSERT INTO attend1 (user,date,attendance,checkin,checkout,remark)VALUES('$user','$date','PRESENT','$time','','$sit')";
$result=mysql_query($sql,$con);

?>
<html>
<body>

<button><a href="checkout.php">Check out</a></button>
<button>log out</button>
</body>
</html>