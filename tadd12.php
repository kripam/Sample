<?php
session_start();
if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
	header("location:index.php");
	exit;
}
$dep=$_SESSION['department'];
$subname=$_SESSION['subject'];
$sem=$_SESSION['semester'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ATTENDANCE TRACKER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>
<body>
<h1 style="text-align:center">ATTENDANCE TRACKER</h1>
<div class="row">
<div class="col-sm-8">
<ul class="pagination ">
	<li class="active"><a href="hometeacher.php"><img src="image/download1.jpg" height="60px"></a></li>
	<li><a href="index.php"><img src="image/logout-button-md.jpg" height="60px"></a></li>
</ul>
</div>
<div class="col-sm-4" >
	<p id="demo"></p>
	<script>
		document.getElementById("demo").innerHTML=Date();
	</script>
</div>
</div>
<?php

$y=$_POST['year'];
$m=$_POST['month'];
 $d=$_POST['day'];
 $date="$m $d $y";
 $dd=date('m/d/y',strtotime($date));
 echo "$dd";
 $da=strtotime("$m  $d  $y");
 
   $_SESSION['date']=$dd;
   $day=date('l',$da);
   echo "$day";
   $con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
if(!$con){
	die ("not connected");
}
$sql1="SELECT * FROM `timetable` WHERE h1='$subname'and dnum=$dep and day='$day' and semid='$sem'";
    $i=0;
    if( ($result1=mysqli_query($con,$sql1)))
	{
	$i++;	
	if(mysqli_num_rows($result1)>0){
	
		
	require 'tmypage2.php';
	require 'tg.php';
	}
	}
   $sql2="SELECT * FROM `timetable` WHERE h2='$subname'and dnum=$dep and day='$day' and semid='$sem'";
    if( ($result1=mysqli_query($con,$sql2)))
	{
		$i++;
		if(mysqli_num_rows($result1)>0){
	
		
	require 'tmypage2.php';
	require 'tg.php';
	}
	}
	$sql3="SELECT * FROM `timetable` WHERE h3='$subname'and dnum=$dep and day='$day' and semid='$sem'";
    if( ($result1=mysqli_query($con,$sql3)))
	{
		$i++;
	if(mysqli_num_rows($result1)>0){
	
		
	require 'tmypage2.php';
	require 'tg.php';
	}
	}
	 $sql4="SELECT * FROM `timetable` WHERE h4='$subname'and dnum=$dep and day='$day' and semid='$sem'";
    if( ($result1=mysqli_query($con,$sql4)))
	{
		$i++;
	if(mysqli_num_rows($result1)>0){
	
		
	require 'tmypage2.php';
	require 'tg.php';
	}
	}
	 $sql5="SELECT * FROM `timetable` WHERE h5='$subname'and dnum=$dep and day='$day' and semid='$sem'";
    if( ($result1=mysqli_query($con,$sql5)))
	{
		$i++;
	if(mysqli_num_rows($result1)>0){
	
		
	require 'tmypage2.php';
	require 'tg.php';
	}
	}
	 $sql6="SELECT * FROM `timetable` WHERE h6='$subname'and dnum=$dep and day='$day' and semid='$sem'";
    if( ($result1=mysqli_query($con,$sql6)))
	{
		$i++;
	if(mysqli_num_rows($result1)>0){
	require 'tmypage2.php';
	require 'tg.php';	
	
	}
	} 
?>

