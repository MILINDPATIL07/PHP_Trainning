<?php
require 'dbconnect.php';

session_start();
//var_dump($_post);
if (!isset($_POST["btn_sb"])) {
	//echo"INVALID USERNAME OR PASSWORD";
	header("location:login.php");
	// exit();
}
if (isset($_POST["btn_sb"])) {
	//session_start();
	// get cookie from session

	$us = $_POST['email'];
	$ps = $_POST['password'];

	$qry = "SELECT * FROM emp WHERE email='" . $us . "' AND password='" . $ps . "'";

	$rs = mysqli_query($conn, $qry);

	if (mysqli_num_rows($rs) > 0) {
		$row = mysqli_fetch_assoc($rs);

		$_SESSION['email'] = $row['email'];
		$_SESSION['pass'] = $row['password'];

		// set cookie

		if (isset($_POST['remember'])) {
			setcookie("user", $us, time() + (86400 * 30), "/");
			setcookie("pass", $ps, time() + (86400 * 30), "/");
		}

		header("location:index.php");
		//exit();
	} else {
		//echo "INVALID LOGIN";
		header("location:login.php?msg=Please Enter Valid Login Details");
		//exit();
	}
} 
?>
