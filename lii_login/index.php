<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<me ta http-equiv="refresh" content="0.1">
	

	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Login</title>
</head>
<body>
	<div class="take_data">
	<form method="post" action="connector.php">
		<h1>LOGIN</h1>
		<label for ="reg_input">Registered Number</label>
		<input autocomplete="off" type="text" name="reg_input" autofocus required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<label for ="user_name">Name&nbsp;</label>
		<input autocomplete="off" type="text" name="user_name" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<label for = "sys_num">System Number</label>
		<input autocomplete="off" type="number" name="sys_num" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<button type="submit" name="submit">login</button>
	</form>
	<form method="post" action="logout.php">
		<hr>
		<br>

		<h1>LOGOUT</h1>
		<label for ="reg_input">Registered Number</label>
		<input autocomplete="off" type="text" name="reg_input" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" name="submit">logout</button>
		<hr>
		<br>
	</form>
	</div>
	<div class="show_data">
		<?php
		$servername="localhost";
		$username="root";
		$password="ar_lol5%";
		$dbname="lii";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($conn,"SELECT * FROM live_data");

echo "<table border='1'>
<tr>
<th>Registered Number</th>
<th>Name</th>
<th>System Number</th>
<th>In Time</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['reg_num'] . "</td>";
echo "<td>" . $row['user_name'] . "</td>";
echo "<td>" . $row['sys_num'] . "</td>";
echo "<td>" . $row['date_time'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
	</div>
</body>
</html>
