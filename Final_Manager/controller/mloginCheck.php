<?php
	session_start();
    require_once('../model/musersModel.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != "" || $password != ""){

			$_SESSION['mflag'] = true;
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			$conn = getConnection();
			$sql="SELECT * FROM users where username = '$username' and password = '$password'";
			
			$result = mysqli_query($conn, $sql);

            if($result->num_rows == 1  ){
               
                $status_customer = validate_customer($username, $password);
                $status_manager = validate_manager($username, $password);
                $status_employee = validate_employee($username, $password);
                if($status_customer){
                    setcookie('cflag', 'true', time()+3600, '/');
                    $_SESSION['cusername'] = $username;
                    header('location: ../view/customer.php');
                }elseif($status_manager){
                    setcookie('mflag', 'true', time()+3600, '/');
                    $_SESSION['musername'] = $username;
                    header('location: ../view/manager.php');
                }elseif($status_employee){
                    setcookie('eflag', 'true', time()+3600, '/');
                    $_SESSION['eusername'] = $username;
                    header('location: ../view/emp.php');
                }else{
                    echo 'invalid username/password';
                }
            }else{
                echo "null value found...";
            }
        }else{
            echo "invalid request...";
        }
    }
?>