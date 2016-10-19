
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

?>  

<html>
<body>
<button><a href="display.php">this month attendance</a></button>

<button><a href="lastmonth.php">last month attendance</a></button>

<button><a href="checkin.php">Check in</a></button>

<button>Check Out</button>

<button>log out</button>

</body>
</html>