<?php
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['Email'];

		if($Email == ""){
			echo "invalid Email!";
		}else{
			echo $Email;
		}

	}else{
		echo 'invalid request';
	}
?>

