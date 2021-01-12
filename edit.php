<?php

 include_once("connections.php");

 $con = connections();



 	 $id = $_GET['id'];

     $sql = "SELECT * FROM person WHERE id='$id'";

    $person = $con->query($sql)or die ($con->error);

	$row = $person->fetch_assoc();


if (isset($_POST['submit'])) {



 	$fname = $_POST['firstname'];
 	$lname = $_POST['lastname'];

 	 $gender = $_POST['gender'];

 	 $id = $_GET['id'];

     $sql = "UPDATE person SET first_name='$fname', last_name='$lname', Gender='$gender' WHERE id='$id'";

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

		<input type="text" name="firstname" value="<?php echo $row['first_name']?>">

		<label>LAST NAME</label>

		<input type="text" name="lastname" value="<?php echo $row['last_name']?>">

		<select name="gender">
			<option name="Male" <?php echo ($row['Gender']=="Male")? 'selected':''?>>Male</option>
			<option name="Female" <?php echo ($row['Gender']=="Female")? 'selected':''?>>Female</option>
		</select>

		<input type="submit" name="submit">
		



	</form>



</body>
</html>