<?php
	session_start();
	include "db.php";
	if (isset($_POST['submit'])) {
		$mail =$_POST['mail'];
		$pass =$_POST['pass'];
		$sql="SELECT Email,Password  FROM infodata";
		$result=$con->query($sql);
		while ($data=$result->fetch_assoc()) {
			$m=$data['Email'];
			$p=$data['Password'];
			if ($mail===$m AND $pass===$p) {
				header("location:member.php");
				
			}else{
				echo "not mass";
			}
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
			<form  method="POST" action="login.php">
				<table>
					<tr>
						<td>Your Email</td>
						<td><input type="email" name="mail" class="input_sign" placeholder="Your Email"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="pass" class="input_sign" placeholder="Password"></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Login" class="input_sign_submit">
							
						</td>
					</tr>
					
				</table>
			</form>	
		</div>
	</body>
</html>
