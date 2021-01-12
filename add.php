<?php

 include_once("connections.php");

 $con = connections();



if (isset($_POST['submit'])) {



 	$fname = $_POST['firstname'];
 	$lname = $_POST['lastname'];

 	 $gender = $_POST['gender'];

     $sql = "INSERT INTO `person`( `first_name`, `last_name`, `Gender`) VALUES ('$fname','$lname','$gender')";

    $person = $con->query($sql)or die ($con->error);

	echo header("Location: index.php");

 }


?>


<!DOCTYPE html>
<html>
<head>
	<title>RECORD SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	


	<form method="post">

		<label>FIRST NAME</label>

		<input type="text" name="firstname">

		<label>LAST NAME</label>

		<input type="text" name="lastname">

		<select name="gender">
			<option name="Male">Male</option>
			<option name="Female">Female</option>
		</select>

		<input type="submit" name="submit">
		



	</form>



</body>
</html>