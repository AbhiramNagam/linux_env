<?php
$servername="localhost";
$username="root";
$password="ar_lol5%";
$dbname="lii";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if ($conn==false)
	die("ERROR  :Could not connect.".mysql_connect_error());



if(isset($_POST['submit'])){
	$reg_num=$_REQUEST['reg_input'];
	$name=$_REQUEST['user_name'];
	$sys_num=$_REQUEST['sys_num'];
	date_default_timezone_set("Asia/Kolkata");
	$in_time=date("h:i:sa");
	$date=date("d/m/Y");

	$out_time='--';
	echo $date;
	print_r("<br>");
	echo $out_time;

	$sql1="INSERT INTO live_data VALUES('$reg_num','$name','$sys_num','$in_time')";
	$sql2="INSERT INTO permanent_data VALUES('$reg_num','$name','$sys_num','$in_time','$out_time','$date')";
	
	mysqli_query($conn,$sql1);
	mysqli_query($conn,$sql2);
	
	/*
	print_r("<br>");
	if(mysqli_query($conn,$sql))
		echo "data stored in database successfully.";
	else
		echo "ERROR : Hush! Sorry %sql.".mysql_error($conn);
	*/
	mysqli_close($conn);
	header("Location:index.php");
}

?>