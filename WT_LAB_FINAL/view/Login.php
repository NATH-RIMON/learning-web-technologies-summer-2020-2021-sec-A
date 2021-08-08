<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
<script >
            function validation()
            {
                let username=document.getElementById("username");
                if(name.value.trim()=="")
                {
                    alert("Blank field is not allow");
                }

                

                else
                {
                    alert("Submit successfully");

                }

                let password=document.getElementById("password");
                if(password.value.trim()=="")
                {
                    alert("Blank field is not allow");
                }

                

                else
                {
                    alert("Submit successfully");

                }



            }

        </script>



    
	<form onsubmit="validation()" method="post" action="../controller/loginCheck.php">
			<center>
    <table  width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
                <h3><b>FoodShop</b></h3>
            </td>
            <td align="Right">
                <a href="../index.php">Home</a> |
                <a href="Login.php">Login</a> |
                <a href="Registration.php">Registration</a>
            </td>
                    </tr>
                    </table>
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
			<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
                
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
					
               
				<tr>
					<td><input type="submit" name="submit" value="Submit"><a href="forgot password.php">Forgot Passwor?</td>
                </tr>
			</table>
            </fieldset>
            </td>
        </tr>
        
    </table>
    </center>
		
	</form>
</body>
</html>