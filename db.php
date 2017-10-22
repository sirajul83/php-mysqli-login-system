<?php
	$server="localhost";
	$user  ="root";
	$pass  ="";
	$dbname ="member";
	$con = new mysqli($server,$user,$pass,$dbname);
	if ($con->connect_error){
		echo "db connect error".$con->connect_error;
	}
?>