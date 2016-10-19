<?php   
session_start(); //to ensure you are using same session

if(isset($_SESSION['login_status']))
{

}
else
{
	header("location: login.html");
	exit;
}
session_destroy();
header("location: login.html"); //to redirect back to "index.php" after logging out
?>