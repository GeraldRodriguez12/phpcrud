<?php


 include_once("connections.php");

 $con = connections();


if (isset($_POST['delete'])) {
	

	$id = $_POST["id"];

	$sql = " DELETE FROM person WHERE id='$id'";

	$person = $con->query($sql)or die($con->error);

	echo header("Location: index.php");
}
