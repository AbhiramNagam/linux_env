<?php
$servername="localhost";
$username="root";
$password="arcH";
$dbname="lii";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn==false)
	die("ERROR  :Could not connect.".mysql_connect_error());


if(isset($_POST['submit'])){
	$reg_num=$_REQUEST['reg_input'];

	date_default_timezone_set("Asia/Kolkata");
	$out_time=date("h:i:sa");
	
	$sql1="DELETE FROM `lii`.`live_data` WHERE (`reg_num`='$reg_num')";
	$sql2="UPDATE permanent_data  SET out_time= '$out_time' WHERE reg_num='$reg_num' ";

	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);

	mysqli_close($conn);
	header("Location:index.php");
}
?>