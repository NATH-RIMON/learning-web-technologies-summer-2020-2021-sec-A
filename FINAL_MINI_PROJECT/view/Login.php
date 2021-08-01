<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
    
	<form method="post" action="../controller/loginCheck.php">
			<center>
    <table  width="500px">
	    <tr>
            <td>
                <table width="500px">
                    <tr>
						<td align="Left">
               
            </td>
            <td align="Right">
                
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
					<td>UserId</td>
					<td><input type="text" name="ID"></td>
				</tr>
                
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
					
                <tr>
                    <td>
                        <input type="checkbox" name="remember me" value=""> Remember Me
					</td>
                </tr>
                <tr>
                <td>
                        <input type="submit" name="lohin" value="Lohin"> 
                        <a href="Registration.php">Registration</a>
					</td>

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