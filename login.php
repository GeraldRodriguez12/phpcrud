<?php


if (!isset($_SESSION)) {
	
	session_start();

}
 include_once("connections.php");

 $con = connections();



if (isset($_POST['submit'])) {



 	$username = $_POST['username'];
 	$password = $_POST['password'];


     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $person = $con->query($sql)or die ($con->error);

    $row = $person->fetch_assoc();

    $total = $person->num_rows;

    if ($total > 0) {

    	$_SESSION['FORM'] = $row['username'];
    	$_SESSION['Access'] = $row['access'];

    	echo header("Location:index.php");
 	   	# code...
    }else{
    	echo "NO USER FOUND";
    }



 }


?>


<!DOCTYPE html>
<html>
<head>
	<title>RECORD SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	


	<form  method="post">

		<label>USERNAME</label>

		<input type="text" name="username">

		<label>PASSWORD</label>

		<input type="password" name="password">

		
		<input type="submit" name="submit">
		



	</form>



</body>
</html>