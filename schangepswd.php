<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 
	Template 2018 Notebook
    http://www.tooplate.com/view/2018-notebook
-->
<title>password</title>
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
		<div id="tooplate_sidebar">
			<div id="header">
				</div>
			<div id="menu">
				<ul class="navigation">
					<li><a href="homestudent.php" class="selected menu_01">home</a></li>
					<li><a href="index.html" class="menu_02">log out</a></li>
				</ul>
			</div>
		</div>
		
		<div id="content">
			<div class="scroll">
           		 <div class="scrollContainer">
           		 	<div class="content_head">
           		 		<h1><b>change password</b></h1>
           		 	</div>
					<div class="content_sect">
					<form method="post">
						<label><b>Enter admission number:</b></label><br />
						<input type="number" name="adminno" class="form-control" size="50" placeholder="Enter admission number"/><br />
						<div class="cleaner_h20"> </div><br />
						<label><b>Enter current password:</b></label><br />
						<input type="password" name="curpassword" class="form-control" size="50" placeholder="Enter current password"/><br />
						<div class="cleaner_h20"> </div><br />
						<label><b>Enter New password:</b></label><br />
						<input type="password" name="newpassword" class="form-control" size="50" placeholder="Enter new password"/><br />
						<div class="cleaner_h20"> </div><br />
						<label><b>Confirm password:</b></label><br />
						<input type="password" name="confpassword" class="form-control" size="50" placeholder="Enter new password again"/><br />
						<div class="cleaner_h20"> </div><br />
						<input type="submit" value="submit" name="submit"/>
					</form>
				</div>
			</div>
		</div>
		</div>
	</div>
		<?php
		 	if (isset($_POST['submit'])) {
		 		$adminno=$_POST['adminno'];
				$curpassword=$_POST['curpassword'];
				 $newpassword=$_POST['newpassword'];
				 $confpassword=$_POST['confpassword'];
				
				 $con=mysqli_connect('localhost','root','','attendancetracker');
				 $sql1="SELECT `password`  FROM `student` WHERE `student`.`adminno` = $adminno";
				 			 if(!($result=mysqli_query($con,$sql1)))
{
	echo "error";
}
$row1=mysqli_fetch_assoc($result);
if($row1['password']==$curpassword)
{
				 $sql2="UPDATE `attendancetracker`.`student` SET `password` = '$newpassword' WHERE `student`.`adminno` = $adminno";
				 if ($newpassword!=$confpassword) {
				 	echo "reenter password";
				 } else{
				 	mysqli_query($con, $sql2);
   					 echo "Record updated successfully";
				}
			}
			else {
				echo "Renter the current password";
			}
			}
		?>
	</div>
	</body>
</html>