<?php
	
	if(isset($_REQUEST['submit'])){
		
		$dob1 = $_REQUEST['dob1'];

		if($dob1 == ""){
			echo "invalid dob!";
		}else{
			echo "day: ";
			echo $dob1;
		}

	}else{
		echo 'invalid request';
	}

	if(isset($_REQUEST['submit'])){
		
		$dob2 = $_REQUEST['dob2'];

		if($dob2 == ""){
			echo "invalid dob!";
		}else{
			echo " month: ";
			echo $dob2;
		}

	}else{
		echo 'invalid request';
	}

	if(isset($_REQUEST['submit'])){
		
		$dob3 = $_REQUEST['dob3'];

		if($dob3 == ""){
			echo "invalid dob!";
		}else{
			echo " year: ";
			echo $dob3;
		}

	}else{
		echo 'invalid request';
	}
?>