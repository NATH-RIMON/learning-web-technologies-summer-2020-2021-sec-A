<?php

	session_start();

	if ($_SESSION['flag']) {
		$id = $_SESSION['id'];
		$password = $_SESSION['password'];

		$conn = mysqli_connect('localhost', 'root', '', 'lab_final');
		$sql = "select name from registration where id = '$id' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		$name = mysqli_fetch_assoc($result);
		
	}

?>

<center>
	<h1>Welcome <?php echo $name['name']; ?></h1>
	<a href="Admin_home.php">Profile</a>
	<br/>
	
	<br/>
	<a href="search.php">View Users</a>
	<br/>
	<a href="login.php">Logout</a>
</center>