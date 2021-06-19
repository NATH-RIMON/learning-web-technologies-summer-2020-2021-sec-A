<?php
	$gender=1;
	
	if(isset($_REQUEST['submit'])){
		
		$gender = $_REQUEST['gender'];

		if($gender == 1){
			echo "invalid choice";
		}else{
			echo $gender;
		}

	}else{
		echo ' ';
	}

?>