<?php


	session_start();


	unset ($_SESSION['FORM']);
	unset ($_SESSION['Access']);

	echo header("Location: index.php");