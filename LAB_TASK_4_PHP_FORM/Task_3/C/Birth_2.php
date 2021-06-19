<?php
    $dob1=" ";
    $dob2=" ";
    $dob3=" ";
	
	if(isset($_REQUEST['submit'])){
		
		$dob1 = $_REQUEST['dob1'];

		if($dob1 == ""){
			echo "Put Your Birthday!";
		}else{
			echo "day: ";
			echo $dob1;
		}

	}else{
		echo 'Put Your Birthday';
	}

	if(isset($_REQUEST['submit'])){
		
		$dob2 = $_REQUEST['dob2'];

		if($dob2 == ""){
			echo "Put Your Birthday";
		}else{
			echo " month: ";
			echo $dob2;
		}

	}else{
		echo 'Put Your Birthday';
	}

	if(isset($_REQUEST['submit'])){
		
		$dob3 = $_REQUEST['dob3'];

		if($dob3 == ""){
			echo "Put Your Birthday";
		}else{
			echo " year: ";
			echo $dob3;
		}

	}else{
		echo 'Put Your Birthday';
	}
?>



<html>

<head>
    <title>Date of Birth</title>
</head>

<body>

    <fieldset>
        <legend>Date of Birth</legend>
        <form method="POST" action="Birth_2.php" >
            <table>
                <tr>
                    <pre><b>  dd      mm     yyy</b></pre>
                    <input type="pin" name="dob1" size="1" value=""> <b> / </b>
                    <input type="pin" name="dob2" size="1" value=""> <b> / </b>
                    <input type="pin" name="dob3" size="1" value="">
                </tr>
                <tr>
                    <td>
                        <hr style="width:270%;text-align:left;margin-left:0">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>