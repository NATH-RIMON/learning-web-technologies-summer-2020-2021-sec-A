<?php

$blood="";
	
	if(isset($_REQUEST['submit'])){
		
		$blood = $_REQUEST['bg'];

		if($blood == ""){
			echo "invalid choice";
		}else{
			echo $blood;
		}

	}else{
		echo ' ';
	}
?>

<html>

<head>
    <title>A</title>
</head>

<body>

    <fieldset>
        <legend>Blood Group</legend>
        <form method="POST" action="Blood_1.php">
            <table>
                <tr>
                    <td>
                        <select name="bg">
                            <option name="blood" value="A+">A+</option>
                            <option value="B+" name="blood">B+</option>
                            <option value="AB+"name="blood">AB+</option>
                            <option value="O+"name="blood">O+</option>
                            <option value="A-"name="blood">A-</option>
                            <option value="B-"name="blood">B-</option>
                            <option value="AB-"name="blood">AB-</option>
                            <option value="O-"name="blood">O-</option>
                        </select><br>
                        <hr color="black" width="150px" align="left">
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>