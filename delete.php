<?php 
	include_once 'connection.php';
	error_reporting(0);
	$u_id = $_GET['idd'];
	$sql = "DELETE FROM PHP WHERE ID='$u_id' ";
	$result = mysqli_query($connection,$sql);
	if($result){
		echo "Deletd. <a href='show.php'>Check Database</a> ";
	}
	else{
		echo "Not deleted...";
	}
?>
