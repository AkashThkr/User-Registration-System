<?php 
	include_once 'connection.php';
	error_reporting(0);
	$_GET['idd'];
	$_GET['namee'];
	$_GET['passs'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Insert</title>
	</head>
	<body style="background-color:pink;">
		<form action="" method="GET">
			<table>
				<tr>
					<td>Id:</td>
					<td><input type='text' name='id' value="<?php echo $_GET['idd']; ?>" ></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type='text' name='name' value="<?php echo $_GET['namee']; ?>" ></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td><input type='text' name='password' value="<?php echo $_GET['passs']; ?>"></td>
				</tr>

				<tr>
					<td><input type='submit' name='submit' value='update'></td>
				</tr>
			</table>
		</form>

		<?php 
			if($_GET['submit']){
				$user_id = $_GET['id'];
				echo $user_id;
				$user_name = $_GET['name'];
				echo $user_name;
				$user_pass = $_GET['password'];
				echo $user_pass;
				$sql = "UPDATE PHP SET username='$user_name' , password='$user_pass' WHERE id='$user_id' ";
				$result = mysqli_query($connection,$sql);
				
				if($result){
					echo "Updated. <a href='show.php'>Check Database</a> ";

				}
				else{
					echo "Not Updated...";
				}
			}
			else{
				echo "No";
			}
		?>
	</body>
</html>