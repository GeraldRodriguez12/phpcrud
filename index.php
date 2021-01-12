<?php

if (!isset($_SESSION)) {
	session_start();
}

if (isset($_SESSION['FORM'])) {
	echo "WELCOME".$_SESSION['FORM'];
}else{
	echo "WELCOME GUEST";
}



 include_once("connections.php");

 $con = connections();

 $sql = "SELECT * FROM person";

 $person = $con->query($sql)or die ($con->error);

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



	<?php if (isset($_SESSION['FORM'])) { ?>
		<a href="logout.php">LOG OUT</a>
	<?php }else{ ?>
		<a href="login.php" >LOGIN</a>		
	<?php }  ?>
	
	

	<a href="add.php">Add new</a>

	<a href="register.php">REGISTER</a>

	<table>
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>

			</tr>

		</thead>
		<tbody>
			<?php do{ ?>
			<tr>
				<th><a href="details.php?id=<?php echo $row['id'] ?>">View</a><th>
				<th><?php echo $row['first_name']?></th>
				<th><?php echo $row['last_name']?></th>
			<?php }while ($row = $person->fetch_assoc());?>
			</tr>
			

		</tbody>


	</table>



</body>
</html>