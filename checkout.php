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
		
		date_default_timezone_set('Asia/Kolkata');

		$time2 = date('H:i');
		$rr=$_SESSION['times'];
		 $use = $_SESSION['user'];
		$date1 = date("Y-m-d");
		$result=mysql_query( "UPDATE attend1 SET checkout='$time2' where date='$date1' and checkin='$rr' " , $con);

	?>

	<button><a href="logout.php"> log out</a></button>