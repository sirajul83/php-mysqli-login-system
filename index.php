<?php
	session_start();
	include "db.php";
	if (isset($_POST['submit'])) {
		$name =$_POST['name'];
		$mail =$_POST['mail'];
		$pass =$_POST['pass'];
		$bithdate =$_POST['bithdate'];
		$number =$_POST['number'];
		$country =$_POST['country'];
		$gender =$_POST['gender'];

		$sql="INSERT INTO infodata(Name,Email,Password,Birthdate,Mobaile,Country,Gender) VALUES('$name','$mail','$pass','$bithdate','$number','$country','$gender')";
		$result=$con->query($sql);
		if ($result===TRUE) {
			header("location:login.php");
		}else{
			echo "Data not insert";
		}

	}
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Log in</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<header>
			<div class="left-header">
			<h3>Log in system</h3>
			</div>
			<div class="right-header">
				<ul>
					<li><a href="index.php" class="log_sign">Sign up </a></li>
					<li><a href="login.php" class="log_in">Login</a></li>
				</ul>
			</div>
		</header>
		<div class="content">
			<form  method="POST" action="index.php">
				<table>
					<tr>
						<td>Your name</td>
						<td><input type="text" name="name" class="input_sign" placeholder="Your name"></td>
					</tr>
					<tr>
						<td>Your Email</td>
						<td><input type="email" name="mail" class="input_sign" placeholder="Your Email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="pass" class="input_sign" placeholder="Password"></td>
					</tr>
					<tr>
						<td>Date of birth</td>
						<td><input type="date" name="bithdate" class="input_sign" >
						</td>
					</tr>
					<tr>
						<td>Mobaile no</td>
						<td><input type="text" name="number" class="input_sign" placeholder="Your Number">
						</td>
					</tr>
					<tr>
						<td>Country</td>
						<td><select name="country" class="input_sign_select">
							<option class="input_sign_select" > Select your country </option>
							<option value="Australia">Australia</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Canada">Canada</option>
							<option value="Denmark">Denmark</option>
							<option value="England">England</option>
						</select></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td><input type="radio" name="gender" value="Male" checked class="input_sign_radio">Male
							<input type="radio" name="gender"  value="Female" class="input_sign_radio">Female
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Sign up" class="input_sign_submit">
							<input type="reset" name="reset" value="Clear" class="input_sign_reset">
						</td>
						
					</tr>
				</table>
			</form>	
		</div>
	</body>
</html>
