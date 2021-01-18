<?php

	$dbServername = "localhost";
	$dbUsername =  "root";
	$dbPassword = "";
	$dbName="akash";

	$connection = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

	if($connection){
		echo "Connection Established........ <br><br>";
	}
	else{
		die("Connection's Not Established..".mysqli_connect_error());
	}
?>
