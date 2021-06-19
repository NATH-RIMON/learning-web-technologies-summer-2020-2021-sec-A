<?php
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['Email'];

		if($Email == ""){
			echo "invalid Email!";
		}else{
			echo $Email;
		}

	}else{
		echo 'Put your Mail';
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>From_2</title>
    </head>
    <body>
        <form method="post" >
            <table>
                <tr>
                    <td>Email:</td>
                   
                </tr>
                <tr>
                    <td><input type="text" name="Email" value=""></td>
                    
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>