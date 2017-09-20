
	<?php
	$row=mysqli_fetch_assoc($result);
	$sub=$row['subjectname'];
	?>
	<form action="thometeacher2.php" method="post">
		<input type="submit" name="submit" value=<?php echo"$sub";?>>
	</form>
	