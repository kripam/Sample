
			 <form  method="post" action="tadd2.php">
				
					<input type="text" name="adminno" value="<?php echo $row['adminno']; ?>">
				
				
					<input type="text" name="fname"  value="<?php echo $row['fname'] ; ?>" >
                  <td align="left"><select name="mark">
                  <option value="p">present</option>
                  <option value="a">absent</option>			
				</td>
					<input type="submit" name="submit" value="Add" >
			
				</form>
				
		
