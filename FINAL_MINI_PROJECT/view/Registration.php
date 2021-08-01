<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
    <div >
	<form method="post" >
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
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>ID</td>
					<td><input type="text" name="ID"></td>
					
				</tr>
                <tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"></td>
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="confirm password"></td>
				
				</tr>
				
				

                
				<tr>
				<td>Type</td>
				<td>
					<select name="type">
					<option>Admin </option>
					<option>Manager</option>
					<option>Customer</option>
					<option>Employee</option>
					</select>
				</td>
				<tr>



				<tr>
					<td><input type="submit" name="submit" value="Register"> </td>
                    <td> <a href="Login.php">I have an already Account</a></td>
				</tr>

			</table>
            </td>
        </tr>
       
    </table>
    </center>
		
	</form>
</body>
</html>