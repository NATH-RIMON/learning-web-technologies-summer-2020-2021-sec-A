<?php

$blood="";
	
	if(isset($_REQUEST['submit'])){
		
		$blood = $_REQUEST['bg'];

		if($blood == ""){
			echo "invalid choice";
		}else{
			echo $blood;
		}

	}else{
		echo ' ';
	}
?>