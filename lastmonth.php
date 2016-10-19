<?php

$con = mysql_connect("localhost","root","credikr6","Etp0%k30") or die (mysql_error());
// Select the database to use
mysql_select_db("logina",$con);

session_start();

 $use = $_SESSION['user'];

 $month = date("m");
 $month = $month-1;
 

//query the database
$query = mysql_query("SELECT * FROM attend1 where user = '$use' and MONTH(date)='$month' " , $con);

//fetch the results / convert results into an array

?>

			<table  border="1" style="width:100%">
            <tr>
			<col width="100">
			<col width="100">
			<col width="100">
			<col width="100">
			<col width="100">
			<td>date</td>
			<td>attendance</td>
			<td>checkin</td>
			<td>checkout</td>
			<td>remark</td>
			</tr>
			</table>
        <?php

        WHILE($row = mysql_fetch_array($query)){
        
			?>
			<table border="1" style="width:100%">
			<col width="100">
			<col width="100">
			<col width="100">
			<col width="100">
			<col width="100">
            <tr>
			<td><p><?php echo $row['date']; ?></p></td>
			<td><p><?php echo $row['attendance']; ?></p></td>
			<td><p><?php echo $row['checkin']; ?></p></td>
			<td><p><?php echo $row['checkout']; ?></p></td>
			<td><p><?php echo $row['remark']; ?></p></td>
			</tr>
			</table>
        <?php
        }
		?>
<button><a href="checkin.php">Check in</a></button>

<button>Check Out</button>

<button>log out</button>
		