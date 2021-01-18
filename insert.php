<?php 
	include_once 'connection.php';
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Insert</title>
	</head>
	<body style="background-color:orange;">
		<form action="insert.php" method="GET">
			<table>
				
				<tr>
					<td>Id:</td>
					<td><input type='text' name='id' required></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type='text' name='name' required></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td><input type='password' name='password' required></td>
				</tr>

				<tr>
					<td><input type='submit' name='submit' value='submit'></td>
				</tr>
			</table>
		</form>

		<?php 
			if($_GET['submit']){
				$id = $_GET['id'];
				$user = $_GET['name'];
				$pass = $_GET['password'];
				if($id!="" && $user!="" && $pass!=""){
					$sql = "INSERT INTO PHP (id,username,password) VALUES ('$id','$user','$pass')";
					$result = mysqli_query($connection,$sql);
				}
				if($sql){
					echo "Data Inserted....";
				}
			}
		?>
	</body>
</html>