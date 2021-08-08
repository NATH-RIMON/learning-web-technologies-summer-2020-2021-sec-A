<?php 

	//connection
	$conn = mysqli_connect('localhost', 'root', '', 'WT_LAB_FINAL');

	$sql = 'select * from registration';
                    
	$result = mysqli_query($conn, $sql);
	
	echo "<table border=1> 
			<tr>
				<td colspan=3 align=center>
					Users
				</td>
			</tr>
			<tr>
				<td>User Name</td>
				<td>NAME</td>
				<td>USER TYPE</td>
			</tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		
		echo 	"<tr>
					<td>{$row['id']}</td>
					<td>{$row['name']}</td>
					<td>{$row['type']}</td>
					
				</tr>";


	}
	echo "  <tr>
				<td colspan=3 align=right>
					<a href=user_home.php>Go Home</a>
				</td>
			</tr>
			<tr>";
	echo "</table>";
	
?>