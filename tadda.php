<?php
session_start();
if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
	header("location:index.php");
	exit;
}
$dep=$_SESSION['department'];
$subname=$_SESSION['subject'];
$sem=$_SESSION['semester'];
$dd=$_SESSION['date'];
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
<div class="col-sm-8">
<ul class="pagination ">
	<li><a href="hometeacher.php">HOME<img src="image/download1.jpg" height="60px"></a></li>
	<li class="disabled"><a href="#">ATTENDANCE<img src="image/download.jpg" height="60px"></a></li>
<li class="next"><a href="index.php"><img src="image/logout-button-md.jpg" height="60px"></a></li>
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
if(isset($_GET['submt']))
	{
	$_SESSION['hour']=$_GET['submt'];
	}
	?>
      <tr>
         	<th>Admisson no</th>
         	<?php
         	echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			?>
        <th>Firstname</th>
        <?php
            echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			
			?>
        <th>Attendence</th>
      </tr>
      
       <?php
       
       
       $con=new mysqli('localhost','root','','attendancetracker');
       $sql="SELECT * FROM `student` WHERE semester=$sem and dpnum=$dep" ; 
	   $result=mysqli_query($con,$sql);
		   while($row=mysqli_fetch_assoc($result))
               {
               	
               require 'tform.php';
		       }
       ?>
    
     </div>
</body>
