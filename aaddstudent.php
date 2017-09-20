<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Notebook - Free HTML Template</title>
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
              <div id="z" class="clear"><a href="homestu.php">Home</a></div>
                       <div id="z" class="clear"><span><a href="index.php">Logout</a></span>
                       	
                       </li>
                
            </div>
         
             
         
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
                <div class="content_section">
                  <h2>ADDING STUDENT</h2> </div>


                            <div class="col_280 float_l">
                  <div id="contact_form">
                      <form  method="post">
				<div class="form-group">
					<label>Admission no</label>
					<input type="number" name="adminno" placeholder="Enter admission no"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
					<label>First name</label>
					<input type="text" name="fname"  placeholder="Enter first name"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
					<label>Last name</label>
					<input type="text" name="lname"  placeholder="Enter last name"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
					<label>Department no</label>
					<input type="number" name="dpnum"  placeholder="Enter department no"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
				<label>Semester</label>
					<input type="number" name="semester"  placeholder="Enter semester"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email"  placeholder="Enter email id"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
				<label>Parentemail</label>
					<input type="email" name="pemail"  placeholder="Enter parent's email id"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password"  placeholder="Enter password"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
				<label>Address</label>
					<input type="text" name=" address"  placeholder="Enter  address"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="ADD" class="submit_btn float_l">
                      <div class="cleaner_h10"></div>
				</div>
				</form>
                  </div>
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
		
		Copyright © 2048 <a href="#">Company Name</a><br />
		Designed by <a href="http://www.tooplate.com">Free HTML Templates</a><br />
       
    </div>
    
			 
		<?php
				if(isset($_POST['submit'])){
			      $fname=$_POST['fname'];
					 $lname=$_POST['lname'];
					 $adminno=$_POST['adminno'];
					 $semester=$_POST['semester'];
					 $dep=$_POST['department'];
					 $email=$_POST['email'];
					  $pemail=$_POST['pemail'];
					  $password=$_POST['password'];
					  $addr=$_POST['address'];
					  $table="student";
					$con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
					  
	             $sql="INSERT INTO `attendancetracker`.`student` (`fname`, `lname`, `semester`, `dpnum`, 

`pemail`, `email`, `adminno`, `password`, `address`) VALUES ('$fname','$lname','$semester', 

'$dep','$pemail','$email','$adminno','$password', '$addr')";
if ($con->query($sql) === TRUE) {
         echo "New record created successfully";
				}
				}
?>	
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>	