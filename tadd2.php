<?php
session_start();
if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
	header("location:index.php");
	exit;
}
$dep=$_SESSION['department'];
$subname=$_SESSION['subject'];
$sem=$_SESSION['semester'];
$adminno=$_POST['adminno'];
$fname=$_POST['fname'];
$mark=$_POST['mark'];
$dd=$_SESSION['date'];
$h=$_SESSION['hour'];
 if(isset($_POST['submit']))
 {
   $con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
    if(!$con)
    {
	die ("not connected");
    }
  
	
     $sql1="INSERT INTO `attendancetracker`.`attendence` (`adminno`, `semester`, `dep`, `subname`, `date`, `hour`,`mark`) VALUES ('$adminno', '$sem', '$dep', '$subname', '$dd','$h','$mark')";
	if(!($result1=mysqli_query($con,$sql1)))
	{
		echo "error";
	}
	else {
		echo "added";
	}
			
					header("location:tadd.php");
			
 }
?>