<html>
	<head></head>
	<body>
	<?php
		$err_name="";
		$name="";
		$err_uname="";
		$uname="";
		$err_pass="";
		$pass="";
		if(isset($_POST['submit']))
		{
			
			if(empty($_POST['name']))
			{
				$err_name="*Name Required";
			}
			else
			{			
				$name=htmlspecialchars($_POST['name']);
				echo $name;
			}
			if (empty($_POST['uname']))
			{
				$err_uname="*Usename Required";
			}
			else
			{
				$uname=$_POST['uname'];
			}
			if (empty($_POST['pass']))
			{
				$err_pass="*Password Required";
			}
			else
			{
				$pass=$_POST['pass'];
			}
		}
	?>
	<h1>Registration</h1>
		<form method="post" action="">
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" value="<?php echo $name;?>" name="name" >
						<br><span style="color:red"><?php echo $err_name;?></span></td> 
					
				</tr>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>">
					<br><span style="color:red"><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<td>Password:</td>
					<td> <input type="password" name="pass" value="<?php echo $pass;?>">
					<br><span style="color:red"><?php echo $err_pass;?></span></td>
					
				</tr>
				<tr>
					<td>Gender: </td>
					<td><input type="radio" name="gender" value="Male"> Male <input type="radio" name="gender" value="Female"> Female</td>
				</tr>
				<tr>
					<td>Hobbies: </td>
					<td><input type="checkbox" name="hobbies[]" value="Movies"> Movies <input type="checkbox" name="hobbies[]" value="Music"> Music <input type="checkbox" name="hobbies[]" value="Games"> Games </td>
				</tr>
				<tr>
					<td>Profession: </td>
					<td>
						<select name="profession">
							<option>Teacher</option>
							<option selected="selected">Student</option>
							<option>Govt. JOb</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="submit" value="Submit">
					</td>
				</tr>
				 
				
				
				
				
				
				
				
			</table>
		</form>
	</body>
</html>