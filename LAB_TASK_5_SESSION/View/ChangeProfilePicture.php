<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Profile Picture</title>
</head>

<body>
    <center>
        <table border="1" width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>XCompany</b></h3>
                            </td>
                            <td align="Right">
                            Logged in as
                                <a href="ViewProfile.php"><?=$_SESSION['user']['username']?></a> |
                                <a href="../controller/Logout.php">Logout</a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td height="150px" width="200px">
                    Account<br><hr>
                    <ul>
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="ViewProfile.php">View Profile</a></li>
                        <li><a href="EditProfile.php">Edit Profile</a></li>
                        <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                        <li><a href="ChangePassword.php">Change Password</a></li>
                        <li><a href="../controller/Logout.php">Logout</a></li>
                    </ul>
                </td>
                <td>
                <fieldset>
			<legend>PROFILE PICTURE</legend>
			<table width="500px">
				<tr>
                    <td><img src="RIMON.jpg" alt="profile pic" style="width:100px;height:100px;"align="Left"></td>
				</tr>
                <tr>
                <td><input type="file" id="myfile" name="myfile" multiple></td>
                </tr>
                <tr>
                   <td colspan="2"><hr></td> 
                </tr>
                <tr>
                <td><input type="submit" name="submit" value="Submit">
				</tr>

			</table>
            </fieldset>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <center>
                    Copyright © 2017
                    </center>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>

<?php
	
	}else{
		header('location: Login.php');
	}
?>