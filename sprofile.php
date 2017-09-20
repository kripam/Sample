<?php
require_once 'inc.php';
$id= $_SESSION['id'];
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Attendance-profile page</title>
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
           	
              <div class="panel" id="services">
                <h1>My Profile</h1>
            
                <img src="images/gallery/images.jpg" alt="Image" class="image_wrapper image_fr" />
                <p></p>
				
                <div class="cleaner_h20"></div>
				
                <ul class="service_list">
                <h3>First Name :			<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['fname'];
				 ?> </h3></b>
				 <h3>Last Name : 			<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['lname'];
				  ?> </h3></b>
				  <h3>Semester : 			<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['semester'];
				  ?> </h3></b>
				  <h3>Department No : 		<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['dpnum'];
				  ?> </h3></b>
				  <h3>Parent's Email : 		<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['pemail'];
				  ?> </h3></b>
				  <h3>Student's Email : 	<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['email'];
				  ?> </h3></b>
				  <h3>Admission no : 		<b>
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['adminno'];
				  ?> </h3></b>
				  <h3>Address : 			<b> 
                 <?php
                $con=new mysqli('localhost','root','','attendancetracker');
				 $result = $con->query("select  * from student where adminno = '$id'");
				 $rows=$result->fetch_assoc();
				 echo $rows['address'];
				  ?> </h3></b>
                </ul>
              </div> <!-- end of services -->
			  
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