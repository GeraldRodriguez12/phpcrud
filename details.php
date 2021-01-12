<?php

if (!isset($_SESSION)) {
	session_start();
}

if (($_SESSION['Access'] && $_SESSION['Access'] == "admin")) {
	echo "WELCOME".$_SESSION['FORM'];
}else{
	echo header("Location: index.php");
}



 include_once("connections.php");

 $con = connections();

$id= $_GET['id'];

$sql = "SELECT * FROM person WHERE id= '$id'";

$person = $con->query($sql) or die($con->error);

$row = $person->fetch_assoc();



?>


<!DOCTYPE html>
<html>
<head>
	<title>RECORD SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>RECORD SITE</h1>

	
<form action="delete.php" method="post">
	
<a href="index.php"><-BACK HOME</a>

<a href="edit.php?id=<?php echo $row['id']?>">EDIT</a>

<BUTTON name="delete">DELETE</BUTTON>	


<h2><?php echo $row['first_name']; echo $row['last_name']; ?></h2>
<H4>this person is<?php echo $row['Gender']; ?></H4>
<input type="text" name="id" value="<?php echo $row['id'] ?>">
 
</form>





</body>
</html>