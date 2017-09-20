<?php
	$con =mysqli_connect('localhost', 'root', '', 'attendancetracker');
	$sql="delete * from student  where semester=8";
	$con->query($sql);
	$sql="update student set semester=8 where semester=7";
	$con->query($sql);
	$sql="update student set semester=7 where semester=6";
	$con->query($sql);
	$sql="update student set semester=6 where semester=5";
	$con->query($sql);
	$sql="update student set semester=5 where semester=4";
	$con->query($sql);
		$sql="update student set semester=4 where semester=3";
	$con->query($sql);
		$sql="update student set semester=3 where semester=1";
	$con->query($sql);
	
	
?>