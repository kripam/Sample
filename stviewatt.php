<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>view page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
          <div id="tooplate_sidebar" style="padding-left: 50px;">
		
          <div id="header">  </div>    
		
				<br>  
                <br>
                <br>         
                       <div id="z" class="clear"><span><a href="homestu.php">Home</a></span></div>
                       <div id="z" class="clear"><span><a href="index.php">Logout</a></span>
                       	
                       </li>
                
            </div>
         
             
         
		</div> <!-- end of sidebar --> 
    
       <div id="content">
          <div class="scroll">
           <div class="scrollContainer">
           	
              <div class="panel" id="aboutus">
                <div class="content_section">
                  <h1>Attendance</h1>
                   </div>
				
                <div class="cleaner_h10"></div>                


<ul class="pagination "><div id="z2" class="clear2"><span><?php echo"PRESENT";?></span></div></ul>
<ul class="pagination "><div id="z3" class="clear3"><span><?php echo"ABSENT";?></span></div></ul>

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

<table border="0px" width="350px">
	<tr>

<td>
<ul class="pagination ">
	<div id="z2" class="clear2"><span><?php echo "$mon/0$i/$year";?></span></div>
</td></ul>
<td></td>
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
	<div id="z2" class="clear2"><span><?php echo "$mon/$i/$year";?></span></div>
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


</table>

                <div class="cleaner_h10"></div>
				
 			
                <div class="col_380 float_r"> </div>
              </div> <!-- end of aboutus -->
				
                <div class="col_380 float_r"> </div>
              </div>
            </div>
          </div><!-- end of scroll -->
		</div>
    </div> <!-- end of content -->
</div>

<div id="footer">
    
	<div id="social_box">
		<a href="#"><img src="images/facebook.png" alt="facebook" /></a>
        <a href="#"><img src="images/flickr.png" alt="flickr" /></a>
        <a href="#"><img src="images/myspace.png" alt="myspace" /></a>
        <a href="#"><img src="images/twitter.png" alt="twitter" /></a>
        <a href="#"><img src="images/youtube.png" alt="youtube" /></a>
    </div>
    
    <div id="footer_left">
		
		Designed by <a href="http://www.tooplate.com">Group no:3</a><br />
       
    </div>
	
    <div class="cleaner"></div>
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->

</body>
</html>