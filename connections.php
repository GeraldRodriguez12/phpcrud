<?php


function connections(){



	$host ="localhost";
	$username = "root";
	$password = "";
	$database = "recordsystem";



	 $con = new mysqli ($host,$username,$password,$database);

	if ($con->connect_error) {
			$con->connect_error;		# code...
	}else{
		return $con;
	}






}










?>