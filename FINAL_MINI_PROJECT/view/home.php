<?php
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <div style="background-image: url('D_1.jpg');">
    <center>
        <table width="700px">

            <tr>
                <td colspan="2">
                    <table width="700px">
                        <tr>
                            <td align="Left">
                                <h3><b>FoodShop</b></h3>
                            </td>
                            <td align="Right">
                            Logged in as
                                <a href="View Profile.php"><?=$_SESSION['user']['username']?></a> |
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
                        
                        <li><a href="Profile.php"> Profile</a></li>
                        <li><a href="Edit Profile.php">Edit Profile</a></li>
                        <li><a href="Change Password.php">Change Password</a></li>
                      
                        
                        <li><a href="../controller/Logout.php">Logout</a></li>

                    </ul>
                </td>
                <td>
                    <b>Welcome to <?=$_SESSION['user']['username']?></b>
                </td>
            </tr>

            
        </table>
    </center>
</body>

</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>