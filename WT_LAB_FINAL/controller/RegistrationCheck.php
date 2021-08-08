<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$gender= $_POST['gender'];
		$dob1=$_POST['dob1'];
		$dob2=$_POST['dob2'];
		$dob3=$_POST['dob3'];
        $mobile=$_POST['mobile'];
        $type=$_POST['type'];

		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=> $password, 'email'=> $email,'gender'=> $gender,'dob1'=> $dob1 ,'dob2'=> $dob2,'dob3'=> $dob3,'mobile'=>$mobile,'type'=>$type];
			$_SESSION['user'] = $user;
            $filename = uniqid(rand(), true) . '.txt';
            $myfile = fopen($filename, "w") or die("Unable to open file!");
            $txt = "username :";
            fwrite($myfile, $txt);
            $txt = $_POST['username'];
            fwrite($myfile, $txt);
            $txt = "\npassword :";
            fwrite($myfile, $txt);
            $txt = $_POST['password'];
            fwrite($myfile, $txt);
            $txt = "\nemail :";
            fwrite($myfile, $txt);
            $txt = $_POST['email'];
            fwrite($myfile, $txt);
            $txt = "\ngender :";
            fwrite($myfile, $txt);
            $txt = $_POST['gender'];
            fwrite($myfile, $txt);
            $txt = "\ndob :";
            fwrite($myfile, $txt);
            $txt = $_POST['dob1'];
            fwrite($myfile, $txt);
            $txt = " / ";
            fwrite($myfile, $txt);
            $txt = $_POST['dob2'];
            fwrite($myfile, $txt);
            $txt = " / ";
            fwrite($myfile, $txt);
            $txt = $_POST['dob3'];
            fwrite($myfile, $txt);
            $txt = "\nphone number :";
            fwrite($myfile, $txt);
            $txt = $_POST['mobile'];
            fwrite($myfile, $txt);
            $txt = "\nuser type :";
            fwrite($myfile, $txt);
            $txt = $_POST['type'];
            fwrite($myfile, $txt);
            fclose($myfile);
            header('location: ../view/Login.php');
			
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>