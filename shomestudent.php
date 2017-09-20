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
<title>Attendance-view attendance</title>
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
                
<h2>

<?php
$con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
if(!$con){
	die ("not connected");
}

 $adminno=$_SESSION['id'];
  $sql="SELECT `fname`, `lname`, `semester`, `dpnum`, `pemail`, `email`, `adminno`, `password`, `address` FROM `attendancetracker`.`student`  WHERE adminno='$adminno'";
  if( !($result=mysqli_query($con,$sql)))
			   {
			   	die ("error");
			   }
				
               while($row=mysqli_fetch_assoc($result))
               {
               		echo $row['fname'];
               	}
?>

</h2>

                <div class="cleaner_h10"></div>
				
                <div class="col_380 float_l">
                  <div id="contact_form">
                    <form method="post" name="contact" action="sample2.php">
                    	
                      <div class="form-group">
     					<label>Semester</label>
	    				<select name="attribute" class="input_field">    
                    	  <option value="1">S1S2</option>
                    	  <option value="2">S3</option>
                    	  <option value="3">S4</option>
                    	  <option value="4" selected>S5</option>
                    	  <option value="5">S6</option>
                    	  <option value="6">S7</option>
                    	  <option value="7">S8</option>
                    	</select>
	                    <div class="cleaner_h10"></div>
            	      </div>
             
                      <div class="form-group">
     					<label>Month</label>
	    				<select name="month" class="input_field">    
                    	  <option value="01">January</option>
                    	  <option value="02">February</option>
                    	  <option value="03" selected>March</option>
                    	  <option value="04">April</option>
                    	  <option value="05">May</option>
                    	  <option value="06">June</option>
                    	  <option value="07">July</option>
                    	  <option value="08">August</option>
                    	  <option value="09">September</option>
                    	  <option value="10">October</option>
                    	  <option value="11">November</option>
                    	  <option value="12">December</option>
                    	</select>
	                    <div class="cleaner_h10"></div>
            	      </div>
            	      
            	      <div class="form-group">
     					<label>Year</label>
	    				<select name="year" class="input_field">   
                    	  <option value="04">2004</option>
                    	  <option value="05">2005</option>
                    	  <option value="06">2006</option>
                    	  <option value="07">2007</option>
                    	  <option value="08">2008</option>
                    	  <option value="09">2009</option>   
                    	  <option value="10">2010</option>
                    	  <option value="11">2011</option>
                    	  <option value="12">2012</option>
                    	  <option value="13">2013</option>
                    	  <option value="14">2014</option>
                    	  <option value="15"selected>2015</option>
                    	  <option value="16">2016</option>
                    	  <option value="17">2017</option>
                    	  <option value="18">2018</option>
                    	  <option value="19">2019</option>
                    	  <option value="20">2020</option>
                    	  <option value="21">2021</option>
                    	  <option value="22">2022</option>
                    	  <option value="23">2023</option>
                    	  <option value="24">2024</option>
                    	  <option value="25">2025</option>
                    	  <option value="26">2026</option>
                    	  <option value="27">2027</option>
                    	  <option value="28">2028</option>
                    	  <option value="29">2029</option>
                    	  <option value="30">2030</option>
                    	  <option value="31">2031</option>
                    	</select>
	                    <div class="cleaner_h10"></div>
            	      </div>
            	     
            	      <div class="form-group">
				    	<input type="submit" name="submit" value="VIEW" class="submit_btn float_l">
                      <div class="cleaner_h10"></div>
				</div>
				</form>
                  </div>
                </div>
				
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