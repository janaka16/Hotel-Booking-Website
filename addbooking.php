<?php

session_start();

	if(isset($_POST['save'])){



	$_SESSION["checkIn"] = $_GET['checkIn'];
	$_SESSION["checkOut"] = $_GET['checkOut'];
	$_SESSION["adult"] = $_GET['adult'];
	$_SESSION["children"] = $_GET['children'];
	$_SESSION["roomType"] = $_GET['roomType'];

	
	header("location:index.php");
	

}