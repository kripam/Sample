			<?php 
session_start();
$tid=$_SESSION['id'];

if(!(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)){
	header("location:index.php");
	exit;
}
?>	
				<?php
				$con =mysqli_connect('localhost', 'root', '', 'attendancetracker');				    
if(!$con){
	die ("not connected");
}
				$sql5="select * from semester where tid='201234'";
				if(!($result=mysqli_query($con,$sql5)))
{
	echo "error";
}
$row4=mysqli_fetch_assoc($result);
					 $dpnum=$row4['depid'];
					 $semester=$row4['semesterid'];
					 

					require 'cclass.php';
				
$sql="select fname,lname,adminno from student where semester='$semester' and dpnum='$dpnum'";
if(!($result=mysqli_query($con,$sql)))
{
	echo "error";
}
require 'cfm.php';
while($row=mysqli_fetch_assoc($result))
{
	$temp=$row['adminno'];
	$sql1="SELECT count(*) FROM `attendence` WHERE adminno='$temp' and mark ='p'";
	if(!($result1=mysqli_query($con,$sql1)))
{
	echo "error";
}
$row1=mysqli_fetch_assoc($result1);
$pp=$row1['count(*)'];

$sql2="SELECT count(*) FROM `attendence` WHERE adminno='$temp' ";
if(!($result2=mysqli_query($con,$sql2)))
{
	echo "error";
}
$row2=mysqli_fetch_assoc($result2);
$tt=$row2['count(*)'];
$per=$pp/$tt*100;
require 'cform2.php';
}

?>
<form  method="post" action="cparent.php">
				<div class="form-group">
					<label>To</label>
					<input type="number" name="stid" placeholder="Enter studentid " class="form-control">
				</div>
				<div class="form-group">
					<label>Message</label>
					<input type="text" name="msg"  value="<?php echo "your son/daughter is under attendence shortage please take neccesary concerns";?>"class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Send mag" class="form-control btn btn-primary">
				</div>
				
			
</form>