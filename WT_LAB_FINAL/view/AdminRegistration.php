<!DOCTYPE html>
<html>
<head>
	<title>Admin Registration Page</title>
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



            }

        </script>






   
	<form onsubmit="validation()" method="post" action="../controller/RegistrationCheck.php">
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
			<legend>REGISTRATION</legend>
			<table>
				<tr>
					<td>Employer Name</td>
					<td><input type="text" name="username"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
					<td>Company Name</td>
					<td><input type="text" name="username"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
					<td>Contract Number</td>
					<td><input type="text" name="username"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
					<td>User Name</td>
					<td><input type="text" name="username"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
					<td>Password</td>
					<td><input type="text" name="username"></td>
					
				</tr>
				<tr>
                   <td colspan="2"><hr></td> 
                </tr>
				
				
				<tr>
					<td><input type="submit" name="submit" value="Submit"> <input type="reset" name="reset" value="Reset"></td>
                    
				</tr>

			</table>
            </td>
        </tr>
       
    </table>
    </center>
		
	</form>
</body>
</html>