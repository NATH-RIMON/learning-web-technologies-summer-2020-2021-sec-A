<?php
	$gender=" ";
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['gender'];

		if($gender == 1){
			echo "invalid choice";
		}else{
			echo $gender;
		}

	}else{
		echo ' ';
	}

?>

<html>

<head>
    <title>Gender</title>
</head>

<body>

    <fieldset>
        <legend>Gender</legend>
        <form method="POST" action="Gender_2.php">
            <table>
                <tr>
                    <td>
                        <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label><br>
                        <hr style="text-align:left;margin-left:0">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>