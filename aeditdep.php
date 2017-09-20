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
                       <div id="z" class="clear"><span><a href="homestu.php">Attendance</a></span></div>
                       <div id="z" class="clear"><span><a href="index.php">Logout</a></span>
                       	
                       </li>
                
            </div>
         
             
         
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
                <div class="content_section">
                  <h2>EDIT DEPARTMENT</h2> </div>


                            <div class="col_280 float_l">
                  <div id="contact_form">
                      <form  method="post">
				<div class="form-group">
					<label>Department no</label>
					<input type="number" name="dpnum" placeholder="Enter admission no"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				<div class="form-group">
					<label>id</label>
					<input type="number" name="adminno" placeholder="Enter the id of new hod"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
				
				<div class="form-group">
					<input type="submit" name="submit" value="EDIT" class="submit_btn float_l">
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
			$adminno=$_POST['adminno'];
			$dpnum=$_POST['dpnum'];
			
			$con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
			 $sql=" UPDATE `attendancetracker`.`department` SET `hodid` = '$adminno' WHERE `department`.`depno` = $dpnum";
			 if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
				}
		}
		?>
				
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>	