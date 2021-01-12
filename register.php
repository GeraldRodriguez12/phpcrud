<?php 


include_once("connections.php");

$con = connections();


if (isset($_POST['submit'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$access = $_POST['access'];


	$sql = "INSERT INTO `users` (`username`,`password`,`access`)VALUES('$username','$password','$access')";

	$person= $con->query($sql) or die($con->error);

	echo header("Location: index.php");


}


?>



<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>

</head>
<body>


<form method="post">

	<label> Username </label>
	<input type="text" name="username">
	<label> Password </label>
	<input type="password" name="password">
	<select name="access">
		<option name="admin">admin</option>
		<option name="user">user</option>
	</select>
	
	<input type="submit" name="submit">


</form>
</body>
</html>
