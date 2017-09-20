<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>VIEW ATTENDENCE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="container>"	
<div id="heading" >
<h1 style="text-align:center">ATTENDANCE TRACKER</h1>
</div>
<div class="row">

<div class="col-sm-4" >
	<p id="demo"></p>
<script>
		document.getElementById("demo").innerHTML=Date();
</script>
	 </div>
</div>

<td>
<ul class="pagination ">
	
	<li class="active"><a href=""><?php echo"PRESENT";?></a></li>
</td></ul>
<td>
	<td>
<ul class="pagination ">
	
	<li class=""><a href=""><?php echo"ABSENT";?></a></li>
</td></ul>
<td>
	<br>
	<?php
	$mon=$_POST['month'];
	 $adminno=$_SESSION['id'];
	  $con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
if(!$con){
	die ("not connected");
}
	
	$year=$_POST['year'];
	if($mon==01)
	{
		$temp=31;
	}
	elseif ($mon==02) {
	
		$temp=28;
	}
	elseif ($mon==03) {
		$temp=31;
	}elseif ($mon==04) {
		$temp=30;
	}elseif ($mon==05) {
		$temp=31;
	}elseif ($mon==06) {
		$temp=30;
	}elseif ($mon==07) {
		$temp=31;
	}elseif ($mon==08) {
		$temp=31;
	}elseif ($mon==09) {
		$temp=30;
	}elseif ($mon==10) {
		$temp=31;
	}elseif ($mon==11) {
		$temp=30;
	}elseif ($mon==12) {
		$temp=31;
	}
	
	for($i=1;$i<=$temp;$i++)
	{
		?>
		<tr>
		<?php
		if($i<10)
		
		{   
		?>
		<td>
<ul class="pagination ">
	<li class="active"><a href=""><?php echo "$mon/0$i/$year";?></a></li>
</td></ul>
			<?php
			$sql="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR1'";
if(!($result=mysqli_query($con,$sql)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql1="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR1'";
if(!($result=mysqli_query($con,$sql1)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			$sql2="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR2'";
if(!($result=mysqli_query($con,$sql2)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql21="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR2'";
if(!($result=mysqli_query($con,$sql21)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			$sql3="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR3'";
if(!($result=mysqli_query($con,$sql3)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql31="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR3'";
if(!($result=mysqli_query($con,$sql31)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			$sql4="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR4'";
if(!($result=mysqli_query($con,$sql4)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql41="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR4'";
if(!($result=mysqli_query($con,$sql41)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			$sql5="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR5'";
if(!($result=mysqli_query($con,$sql5)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql51="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR5'";
if(!($result=mysqli_query($con,$sql51)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			$sql6="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR6'";
if(!($result=mysqli_query($con,$sql)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql61="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/0$i/$year' and hour='HOUR6'";
if(!($result=mysqli_query($con,$sql61)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			
			
			



}
		else {   
		?>
		<td>
<ul class="pagination ">
	<li class="active"><a href=""><?php echo "$mon/$i/$year";?></a></li>
</td></ul>
			<?php
			$sql="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR1'";
if(!($result=mysqli_query($con,$sql)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql1="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR1'";
if(!($result=mysqli_query($con,$sql1)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
						
						
$sql2="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR2'";
if(!($result=mysqli_query($con,$sql2)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql21="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR2'";
if(!($result=mysqli_query($con,$sql21)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			$sql3="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR3'";
if(!($result=mysqli_query($con,$sql3)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql31="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR3'";
if(!($result=mysqli_query($con,$sql31)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			$sql4="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR4'";
if(!($result=mysqli_query($con,$sql4)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql41="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR4'";
if(!($result=mysqli_query($con,$sql41)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			$sql5="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR5'";
if(!($result=mysqli_query($con,$sql5)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql51="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR5'";
if(!($result=mysqli_query($con,$sql51)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			$sql6="SELECT count(*) FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR6'";
if(!($result=mysqli_query($con,$sql)))
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$t=$row['count(*)'];
	$sql61="SELECT subid,hour,mark FROM `attendence` WHERE adminno='$adminno' and date='$mon/$i/$year' and hour='HOUR6'";
if(!($result=mysqli_query($con,$sql61)))
{
	echo "error";
}
if($t>0)
{
	$row=mysqli_fetch_assoc($result);
$hh=$row['hour'];
$s=$row['subid'];
$pa=$row['mark'];
if($pa=='p')
{
	require 'str2.php';
}
else {
	require 'str3.php';
}
}
		else
			{
				 echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			}
			
			
			
			



}
		
?>
</tr>

<?php
	echo "<br>";
	}
	
	?>

 </body>
 

