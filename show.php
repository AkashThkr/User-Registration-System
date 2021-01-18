<style>
	td{
		padding:10px;
	}
</style>

<?php 
	include_once 'connection.php';
	error_reporting(0);

	$sql = "SELECT * FROM PHP";
	$result = mysqli_query($connection,$sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck!=0) { ?>	 
		<table>
			<tr>
				<th>Id</th> 
				<th>Username</th> 
				<th>Password</th>
				<th colspan="2">Operations</th> 
			</tr>
		<?php 
		while($row = mysqli_fetch_assoc($result)){
			echo " <tr>
					<td>".$row['id']."</td>
					<td>".$row['username']."</td>
					<td>".$row['password']."</td>
					<td><a href='update.php? idd=$row[id] & namee=$row[username]& passs= $row[password]'>Update</a></td>
					<td><a href='delete.php? idd=$row[id]' onclick= ' return checkdelete()'>Delete</a></td>
			</tr>";
		}
	}
	else{
		echo "No Record Found !!!!";
	}			
?>	
</table>
<script >
	function checkdelete(){
		return confirm('Confirm to Delete...');
	}
</script>
