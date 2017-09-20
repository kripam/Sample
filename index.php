<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>Attendance-login page</title>
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
<script>
    function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    var y = document.forms["myForm"]["password"].value;
    if (x == null || x == ""||y == null || y == "") {
        alert("username and password cannot be empty");
        return false;
    }
}
</script>
</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
		
           
		</div> <!-- end of sidebar -->  
    
        <div id="content">
          <div class="scroll">
            <div class="scrollContainer">
                <div class="content_section">
                  <h2>Attendance Tracker</h2> 
                  <img src="images/gallery/login_butto.jpg"height="160px"width="450px" alt="Image 01" align="left" class="image_wrapper image_fl" />
                </div>
              <div class="panel" id="home">
                <h1>Login</h1>
                 <div class="cleaner_h10"></div>
				
                <div class="col_380 float_l">
                  <div id="contact_form">
                    <form method="post" name="contact" action="#"> 
                      <label for="author">Username:</label>
                      <input type="text" maxlength="40" id="author" class="input_field" name="username"placeholder="Enter Username" />
                      <div class="cleaner_h10"></div>
                      <label for="email">Password:</label>
                      <input type="password" maxlength="40" id="email" class="input_field" name="password"placeholder="Enter Password" />
                      <div class="cleaner_h10"></div>
                      <input type="submit" value="Go" id="submit" name="submit" class="submit_btn float_l" />
                    </form>
                    <?php
	if(isset($_POST['submit'])){
	$adminno = $_POST['username'];
	$password = $_POST['password'];
   // $password =  md5($password);
	 $con=new mysqli('localhost','root','','attendancetracker');
    if($adminno<200000)
	{
		$x=1;
	$result = $con->query("select  adminno from student where adminno = '$adminno' and password = '$password'"); 
	$rows=$result->fetch_assoc();
	}
	elseif(($adminno>200000)&&($adminno<500000))
	  {
	  	$x=2;
	$result = $con->query("select  teacherid from teacher where teacherid = '$adminno' and password = '$password'"); 
	$rows=$result->fetch_assoc();
	}
	elseif($adminno=500000)
{
	$x=3;
	$result = $con->query("select  teacherid from teacher where teacherid = '$adminno' and password = '$password'"); 
	$rows=$result->fetch_assoc();
}
	else {
		$x=4;
		$result = $con->query("select  pid from parent where teacherid = '$adminno' and password = '$password'"); 
	$rows=$result->fetch_assoc();
	}
	
		if(!$rows)  echo  "Invalid Login";
                
			else {
				session_start();
			    $_SESSION['logged_in'] = true;
		         $_SESSION['id'] = $adminno;
			 if($x==1)
			  {
			 $_SESSION['check']	=1;
		     header("location:shomestudent.php");
			  }
			 elseif($x==2)
			 header("location:thometeacher.php");
		elseif($x==3)
			 	 header("location:addep.php");
		else {
			 header("location:phome.php");
		}
	}
					
	$con->close();	
	}	
	?>
                  </div>
                </div>
				
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