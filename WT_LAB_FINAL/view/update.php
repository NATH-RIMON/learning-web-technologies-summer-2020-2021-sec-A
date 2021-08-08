<?php
	$title="Edit Users";
	include 'header.php';
	$id = $_GET['id'];
	$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['id'] == $id){
			$user = $u;
			break;
		}
	}


?>

	<h1>Edit user</h1>

	
<?php
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<fieldset>
				<table>
					
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" value="<?=$user['name']?>"></td>
					</tr>
					<tr>
						<td>Buying Price</td>
						<td><input type="Buying Price" name="Buying Price" value="<?=$user['Buying Price']?>"></td>
					</tr>
                    <tr>
						<td>Selling Price</td>
						<td><input type="Selling Price" name="Selling Price" value="<?=$user['Selling Price']?>"></td>
					</tr>
					<tr>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="update" value="Save"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
?>