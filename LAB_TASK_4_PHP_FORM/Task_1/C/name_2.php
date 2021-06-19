<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		if($name == ""){
			echo "invalid name!";
		}
	}else{
		echo 'invalid request';
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>B</title>
</head>

<body>
    <fieldset>
        <legend>Name</legend>
        <form method="POST">
            <input type="text" name="name" value="<?php echo $name;?>"/><br>
            <hr style="width:100%;text-align:left;margin-left:0">
            <input type="submit" name="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>