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
                       <div id="z" class="clear"><span><a href="viewatt.php">Home</a></span></div>
                       <div id="z" class="clear"><span><a href="index.php">Logout</a></span>
                       	
                       </li>
                
            </div>
         
             
         
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
                <div class="content_section">
                  <h2>EDIT TEACHER</h2> </div>


                            <div class="col_280 float_l">
                  <div id="contact_form">
                      <form  method="post">
				<div class="form-group">
					<label>Teacher id</label>
					<input type="number" name="teacherid" placeholder="Enter teacher id"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
		<div class="form-group">
					<label>Change </label>
					<select name="attribute" class="input_field">
              	  <option value="fname">SELECT FIELD</option>    
              	  <option value="fname">first name</option>
              	  <option value="lname">last name</option>
              	    <option value="dpno">department number</option>
              	      <option value="email">email</option>
              	       <option value="teacherid">teacher id</option>
              	        <option value="password">password</option>
              	         <option value="adress">address</option>
	</select>
	 <div class="cleaner_h10"></div>
	</div>
	<div class="form-group">
					<label>Value</label>
					<input type="text" name="newval" placeholder="Enter new value"class="input_field">
                      <div class="cleaner_h10"></div>
				</div>
	<div class="form-group">
					<input type="submit" name="submit" value="EDIT"class="submit_btn float_l">
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
			$teacherid=$_POST['teacherid'];
			$attribute=$_POST['attribute'];
			$newval=$_POST['newval'];
			$con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
			 $sql="UPDATE `attendancetracker`.`teacher` SET `$attribute` = '$newval' WHERE `teacher`.`teacherid` = $teacherid";
			 if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
				}
		}
		?>
				
</div>
<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>	